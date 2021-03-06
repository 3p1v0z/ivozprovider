<?php

namespace Ivoz\Provider\Domain\Model\WebPortal;

use Assert\Assertion;
use Ivoz\Core\Domain\Model\TempFileContainnerTrait;
use Ivoz\Core\Domain\Service\FileContainerInterface;

/**
 * WebPortal
 */
class WebPortal extends WebPortalAbstract implements FileContainerInterface, WebPortalInterface
{
    use WebPortalTrait;
    use TempFileContainnerTrait;

    /**
     * @codeCoverageIgnore
     * @return array
     */
    public function getChangeSet()
    {
        return parent::getChangeSet();
    }

    protected function sanitizeValues()
    {
        $isGodUrlType = $this->getUrlType() === self::URLTYPE_GOD;

        if ($isGodUrlType) {
            $this->setBrand(null);
        } elseif (!$this->getBrand()) {
            $errorMsg = sprintf(
                'Brand is required in %s urls',
                $this->getUrlType()
            );
            throw new \DomainException($errorMsg);
        }
    }

    /**
     * @return array
     */
    public function getFileObjects()
    {
        return [
            'Logo'
        ];
    }

    /**
     * Get id
     * @codeCoverageIgnore
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritDoc}
     */
    public function setUrl($url)
    {
        Assertion::regex($url, '#^https://.*$#');
        return parent::setUrl($url);
    }
}
