<?php

namespace App\Mapper\Impl\Reference;

use App\Dto\Reference\ReferenceCreateDto;
use App\Dto\Reference\ReferenceDto;
use Afrikpay\SymfonyThirdpartyAdapter\Mapper\Impl\Reference\ReferenceDtoDtoMapperImpl as BaseReferenceDtoDtoMapperImpl;
use App\Mapper\Reference\ReferenceDtoDtoMapper;

class ReferenceDtoDtoMapperImpl extends BaseReferenceDtoDtoMapperImpl implements ReferenceDtoDtoMapper
{
    /**
     * @param string $entityClass
     * @param string $dtoClass
     */
    public function __construct(string $entityClass = ReferenceDto::class, string $dtoClass = ReferenceCreateDto::class)
    {
        parent::__construct($entityClass, $dtoClass);
    }
}
