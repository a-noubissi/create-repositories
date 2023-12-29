<?php

namespace App\Mapper\Impl\Reference;

use Afrikpay\SymfonyThirdpartyAdapter\Mapper\Option\OptionMapper;
use App\Dto\Reference\ReferenceDto;
use App\Entity\Reference;
use Afrikpay\SymfonyThirdpartyAdapter\Mapper\Impl\Reference\ReferenceMapperImpl as BaseReferenceMapperImpl;
use App\Mapper\Reference\ReferenceMapper;

class ReferenceMapperImpl extends BaseReferenceMapperImpl implements ReferenceMapper
{
    /**
     * @param OptionMapper $optionMapper
     * @param string $entityClass
     * @param string $dtoClass
     */
    public function __construct(OptionMapper $optionMapper, string $entityClass = Reference::class, string $dtoClass = ReferenceDto::class)
    {
        parent::__construct($optionMapper, $entityClass, $dtoClass);
    }
}