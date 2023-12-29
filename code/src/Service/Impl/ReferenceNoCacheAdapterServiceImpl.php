<?php

namespace App\Service\Impl;

use Afrikpay\SymfonyAdapter\Service\AdapterLogService;
use Afrikpay\SymfonyAdapter\Service\TokenAdapterService;
use Afrikpay\SymfonyThirdpartyAdapter\Service\Impl\ReferenceNoCacheAdapterServiceImpl as ReferenceAdapterServiceImpl;
use Afrikpay\SymfonyThirdpartyAdapter\Service\TemplateService;
use Afrikpay\SymfonyUtilities\Service\HttpService;
use Afrikpay\SymfonyUtilities\Service\ParameterService;
use Afrikpay\SymfonyUtilities\Service\YamlTemplateService;
use App\Mapper\Reference\ReferenceApiRequestDtoMapper;
use App\Mapper\Reference\ReferenceApiResponseDtoMapper;
use App\Mapper\Reference\ReferenceCreateDtoMapper;
use App\Mapper\Reference\ReferenceDtoDtoMapper;
use App\Service\ReferenceNoCacheAdapterService;
use App\Service\ReferenceNoCacheService;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\SecurityBundle\Security;

class ReferenceNoCacheAdapterServiceImpl extends ReferenceAdapterServiceImpl implements ReferenceNoCacheAdapterService
{
    /**
     * @param Security $security
     * @param TokenAdapterService $tokenAdapterService
     * @param ReferenceNoCacheService $appService
     * @param ReferenceCreateDtoMapper $requestMapper
     * @param ReferenceDtoDtoMapper $entityMapper
     * @param ReferenceApiRequestDtoMapper $apiRequestMapper
     * @param ReferenceApiResponseDtoMapper $apiResponseMapper
     * @param ParameterService $parameterService
     * @param TemplateService $templateService
     * @param YamlTemplateService $yamlTemplateService
     * @param HttpService $httpService
     * @param LoggerInterface $logger
     * @param AdapterLogService $adapterLogService
     *
     * @throws \ReflectionException
     */
    public function __construct(
        Security $security,
        TokenAdapterService $tokenAdapterService,
        ReferenceNoCacheService $appService,
        ReferenceCreateDtoMapper $requestMapper,
        ReferenceDtoDtoMapper $entityMapper,
        ReferenceApiRequestDtoMapper $apiRequestMapper,
        ReferenceApiResponseDtoMapper $apiResponseMapper,
        ParameterService $parameterService,
        TemplateService $templateService,
        YamlTemplateService $yamlTemplateService,
        HttpService $httpService,
        LoggerInterface $logger,
        AdapterLogService $adapterLogService
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
            $adapterLogService
        );
    }
}
