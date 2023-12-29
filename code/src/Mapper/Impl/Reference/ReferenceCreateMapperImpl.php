<?php

namespace App\Mapper\Impl\Reference;

use App\Dto\Reference\ReferenceCreateDto;
use App\Entity\Reference;
use Afrikpay\SymfonyThirdpartyAdapter\Mapper\Impl\Reference\ReferenceCreateMapperImpl as BaseReferenceCreateMapperImpl;
use App\Mapper\Reference\ReferenceCreateMapper;

class ReferenceCreateMapperImpl extends BaseReferenceCreateMapperImpl implements ReferenceCreateMapper
{
    /**
     * @param string $entityClass
     * @param string $dtoClass
     */
    public function __construct(string $entityClass = Reference::class, string $dtoClass = ReferenceCreateDto::class)
    {
        parent::__construct($entityClass, $dtoClass);
    }
}
