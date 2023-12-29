<?php

namespace App\Mapper\Impl\Reference;

use App\Dto\Reference\ReferenceApiResponseDto;
use App\Dto\Reference\ReferenceDto;
use Afrikpay\SymfonyThirdpartyAdapter\Mapper\Impl\Reference\ReferenceApiResponseDtoMapperImpl as BaseReferenceApiResponseDtoMapperImpl;
use App\Mapper\Reference\ReferenceApiResponseDtoMapper;

class ReferenceApiResponseDtoMapperImpl extends BaseReferenceApiResponseDtoMapperImpl implements ReferenceApiResponseDtoMapper
{
    /**
     * @param string $entityClass
     * @param string $dtoClass
     */
    public function __construct(string $entityClass = ReferenceDto::class, string $dtoClass = ReferenceApiResponseDto::class)
    {
        parent::__construct($entityClass, $dtoClass);
    }
}
