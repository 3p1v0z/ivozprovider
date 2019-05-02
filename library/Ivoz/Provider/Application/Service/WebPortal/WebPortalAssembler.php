<?php

namespace Ivoz\Provider\Application\Service\WebPortal;

use Ivoz\Core\Application\DataTransferObjectInterface;
use Ivoz\Core\Application\Service\StoragePathResolverCollection;
use Ivoz\Core\Domain\Model\EntityInterface;
use Ivoz\Core\Application\Service\Assembler\CustomEntityAssemblerInterface;
use Ivoz\Provider\Domain\Model\WebPortal\WebPortalInterface;
use Assert\Assertion;
use Ivoz\Core\Application\Service\Traits\FileContainerEntityAssemblerTrait;

class WebPortalAssembler implements CustomEntityAssemblerInterface
{
    use FileContainerEntityAssemblerTrait;

    public function __construct(
        StoragePathResolverCollection $storagePathResolver
    ) {
        $this->storagePathResolver = $storagePathResolver;
    }

    /**
     * @param DataTransferObjectInterface $dto
     * @param EntityInterface $entity
     *
     * @return void
     */
    public function fromDto(
        DataTransferObjectInterface $dto,
        EntityInterface $entity,
        \Ivoz\Core\Application\ForeignKeyTransformerInterface $fkTransformer
    ) {
        Assertion::isInstanceOf($entity, WebPortalInterface::class);
        $entity->updateFromDto($dto, $fkTransformer);
        $this->handleEntityFiles($entity, $dto, $fkTransformer);
    }
}
