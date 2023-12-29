<?php

namespace App\Service\Impl;

use Afrikpay\SymfonyAdapter\Service\AdapterLogService;
use Afrikpay\SymfonyAdapter\Service\TokenAdapterService;
use Afrikpay\SymfonyThirdpartyAdapter\Service\Impl\ReferenceAdapterServiceImpl as BaseReferenceAdapterServiceImpl;
use Afrikpay\SymfonyThirdpartyAdapter\Service\TemplateService;
use Afrikpay\SymfonyUtilities\Service\HttpService;
use Afrikpay\SymfonyUtilities\Service\ParameterService;
use Afrikpay\SymfonyUtilities\Service\YamlTemplateService;
use App\Mapper\Reference\ReferenceApiRequestDtoMapper;
use App\Mapper\Reference\ReferenceApiResponseDtoMapper;
use App\Mapper\Reference\ReferenceCreateDtoMapper;
use App\Mapper\Reference\ReferenceDtoDtoMapper;
use App\Service\ReferenceAdapterService;
use App\Service\ReferenceNoCacheAdapterService;
use App\Service\ReferenceService;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\SecurityBundle\Security;

class ReferenceAdapterServiceImpl extends BaseReferenceAdapterServiceImpl implements ReferenceAdapterService
{
    public function __construct(
        Security $security,
        TokenAdapterService $tokenAdapterService,
        ReferenceService $appService,
        ReferenceCreateDtoMapper $requestMapper,
        ReferenceDtoDtoMapper $entityMapper,
        ReferenceApiRequestDtoMapper $apiRequestMapper,
        ReferenceApiResponseDtoMapper $apiResponseMapper,
        ParameterService $parameterService,
        TemplateService $templateService,
        YamlTemplateService $yamlTemplateService,
        HttpService $httpService,
        LoggerInterface $logger,
        AdapterLogService $adapterLogService,
        ReferenceNoCacheAdapterService $referenceNoCacheAdapterService
    ) {
        parent::__construct(
            $security,
            $tokenAdapterService,
            $appService,
            $requestMapper,
            $entityMapper,
            $apiRequestMapper,
            $apiResponseMapper,
            $parameterService,
            $templateService,
            $yamlTemplateService,
            $httpService,
            $logger,
            $adapterLogService,
            $referenceNoCacheAdapterService
        );
    }
}
