<?php

namespace App\Mapper\Impl\Reference;

use App\Dto\Reference\ReferenceCreateDto;
use Afrikpay\SymfonyThirdpartyAdapter\Mapper\Impl\Reference\ReferenceCreateDtoMapperImpl as BaseReferenceCreateDtoMapperImpl;
use App\Mapper\Reference\ReferenceCreateDtoMapper;

class ReferenceCreateDtoMapperImpl extends BaseReferenceCreateDtoMapperImpl implements ReferenceCreateDtoMapper
{
    /**
     * @param string $entityClass
     * @param string $dtoClass
     */
    public function __construct(string $entityClass = ReferenceCreateDto::class, string $dtoClass = ReferenceCreateDto::class)
    {
        parent::__construct($entityClass, $dtoClass);
    }
}
