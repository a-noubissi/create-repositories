<?php

namespace App\Service\Impl;

use Afrikpay\SymfonyThirdpartyAdapter\Mapper\Option\OptionMapper;
use Afrikpay\SymfonyThirdpartyAdapter\Service\Impl\ReferenceNoCacheServiceImpl as BaseReferenceServiceImpl;
use Afrikpay\SymfonyThirdpartyAdapter\Service\OptionService;
use Afrikpay\SymfonyUtilities\Service\ParameterService;
use App\Entity\Reference;
use App\Mapper\Reference\ReferenceCreateMapper;
use App\Mapper\Reference\ReferenceMapper;
use App\Repository\ReferenceRepository;
use App\Service\ReferenceNoCacheService;
use Psr\Log\LoggerInterface;

class ReferenceNoCacheServiceImpl extends BaseReferenceServiceImpl implements ReferenceNoCacheService
{
    /**
     * @param ReferenceRepository $referenceRepository
     * @param ReferenceMapper $referenceMapper
     * @param ReferenceCreateMapper $referenceCreateMapper
     * @param LoggerInterface $logger
     * @param OptionService $optionService
     * @param OptionMapper $optionMapper
     * @param ParameterService $parameterService
     * @param string $entityClass
     */
    public function __construct(
        ReferenceRepository $referenceRepository,
        ReferenceMapper $referenceMapper,
        ReferenceCreateMapper $referenceCreateMapper,
        LoggerInterface $logger,
        OptionService $optionService,
        OptionMapper $optionMapper,
        ParameterService $parameterService,
        string $entityClass = Reference::class
    ) {
        parent::__construct(
            $referenceRepository,
            $referenceMapper,
            $referenceCreateMapper,
            $logger,
            $optionService,
            $optionMapper,
            $parameterService,
            $entityClass
        );
    }
}
