<?php

namespace App\Mapper\Impl\Reference;

use App\Dto\Reference\ReferenceApiRequestDto;
use App\Dto\Reference\ReferenceDto;
use Afrikpay\SymfonyThirdpartyAdapter\Mapper\Impl\Reference\ReferenceApiRequestDtoMapperImpl as BaseReferenceApiRequestDtoMapperImpl;
use App\Mapper\Reference\ReferenceApiRequestDtoMapper;

class ReferenceApiRequestDtoMapperImpl extends BaseReferenceApiRequestDtoMapperImpl implements ReferenceApiRequestDtoMapper
{
    /**
     * @param string $entityClass
     * @param string $dtoClass
     */
    public function __construct(string $entityClass = ReferenceDto::class, string $dtoClass = ReferenceApiRequestDto::class)
    {
        parent::__construct($entityClass, $dtoClass);
    }
}
