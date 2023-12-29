<?php

namespace App\Service\Impl;

use Afrikpay\SymfonyAdapter\Model\AdapterEntity;
use Afrikpay\SymfonyThirdpartyAdapter\Dto\Reference\ReferenceDto as BaseReferenceDto;
use Afrikpay\SymfonyThirdpartyAdapter\Mapper\Option\OptionMapper;
use Afrikpay\SymfonyThirdpartyAdapter\Service\OptionService;
use Afrikpay\SymfonyUtilities\Model\BaseEntity;
use Afrikpay\SymfonyUtilities\Service\ParameterService;
use App\Dto\Reference\ReferenceDto;
use App\Mapper\Reference\ReferenceCreateMapper;
use App\Mapper\Reference\ReferenceMapper;
use App\Entity\Reference;
use App\Repository\ReferenceRepository;
use Afrikpay\SymfonyThirdpartyAdapter\Service\Impl\ReferenceServiceImpl as BaseReferenceServiceImpl;
use App\Service\ReferenceService;
use Psr\Log\LoggerInterface;
use Afrikpay\SymfonyThirdpartyAdapter\Entity\Reference as BaseReference;

class ReferenceServiceImpl extends BaseReferenceServiceImpl implements ReferenceService
{
    /**
     * @param ReferenceRepository $referenceRepository
     * @param ReferenceMapper $referenceMapper
     * @param ReferenceCreateMapper $referenceCreateMapper
     * @param LoggerInterface $logger
     * @param OptionService $optionService
     * @param OptionMapper $optionMapper
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