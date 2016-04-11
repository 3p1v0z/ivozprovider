<?php
namespace Oasis\Klear\Dynamic;
use Oasis\Klear\Dynamic\Config\MainOperator;
use Oasis\Klear\Dynamic\Config\BrandOperator;
use Oasis\Klear\Dynamic\Config\CompanyAdmin;
class Builder
{
    /**
     *
     * @var \Oasis\Model\Brands
     */
    protected static $_brand;

    /**
     * @var  \Oasis\Model\BrandURLs
     */
    protected static $_brandURL;

    public static function factory()
    {
        $currentURLs = self::_loadCurrentURLs();
        self::_resolveBrand($currentURLs);

        $brandURLType = self::$_brandURL->getUrlType();

        $dynamic = null;
        if ($brandURLType == 'god') {
            $dynamic = new MainOperator();

        } elseif ($brandURLType == 'brand') {
            $dynamic = new BrandOperator();
        } elseif ($brandURLType == 'admin') {
            $dynamic = new CompanyAdmin();
        } elseif ($brandURLType == 'user') {

            header("Location: " . $currentURLs[1] . 'portal');
            exit;

        } else {
            self::_failConfiguration();
        }

        $dynamic->setBrand(self::$_brand);
        $dynamic->setBrandUrl(self::$_brandURL);
        $dynamic->setLogo(self::_resolveLogo());

        return $dynamic;
    }

    /**
     * return current REQUEST_URI, both with/without at the end '/'
     * @return array
     */
    protected static function _loadCurrentURLs()
    {
        $front = \Zend_Controller_Front::getInstance();
        $request = $front->getRequest();

        $ret = array();

        $curURL = $request->getScheme() . '://'
                . $request->getHttpHost()
                . $front->getBaseUrl();

        if (substr($curURL,-1) === '/') {
            $altURL = substr($curURL,0,-1);
        } else {$front = \Zend_Controller_Front::getInstance();
        $request = $front->getRequest();

        $ret = array();

        $curURL = $request->getScheme() . '://'
                . $request->getHttpHost()
                . $front->getBaseUrl();
            $altURL = $curURL . '/';
        }

        return array($curURL, $altURL);
    }

    protected static function _resolveBrand($urls)
    {
        $brandURLMapper = new \Oasis\Mapper\Sql\BrandURLs();
        self::$_brandURL = $brandURLMapper->findOneByField('url', $urls);

        if (!self::$_brandURL instanceof \Oasis\Model\BrandURLs) {
            self::$_brandURL = $brandURLMapper->findOneByField('urlType', 'god');
        }

        self::$_brand = self::$_brandURL->getBrand();
    }

    public static function _failConfiguration()
    {
        throw new \Klear_Exception_Default('URL not configured in BrandURLs', 404);
    }

    protected static function _resolveLogo()
    {
        $brandURLType = self::$_brandURL->getUrlType();
        if ($brandURLType == 'god') {
            return null;
        }

        $brandURLLogoBaseName = self::$_brandURL->getLogoBaseName();
        if (!empty($brandURLLogoBaseName)) {
            return "fso/klearBrandUrl/".self::$_brandURL->getPrimaryKey()."-".$brandURLLogoBaseName;
        }

        $brandLogoBaseName = self::$_brand->getLogoBaseName();
        if (!empty($brandLogoBaseName)) {
            return "fso/klearBrand/".self::$_brand->getPrimaryKey()."-".$brandLogoBaseName;
        }

        return null;
    }
}
