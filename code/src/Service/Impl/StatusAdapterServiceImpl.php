<?php

namespace App\Service\Impl;

use Afrikpay\SymfonyAdapter\Service\AdapterLogService;
use Afrikpay\SymfonyAdapter\Service\TokenAdapterService;
use App\Mapper\Transaction\TransactionApiRequestDtoMapper;
use App\Mapper\Transaction\TransactionApiResponseDtoMapper;
use App\Mapper\Transaction\TransactionDtoFindDtoMapper;
use App\Mapper\Transaction\TransactionFindDtoMapper;
use App\Service\StatusService;
use Afrikpay\SymfonyThirdpartyAdapter\Service\TemplateService;
use Afrikpay\SymfonyUtilities\Service\HttpService;
use Afrikpay\SymfonyUtilities\Service\ParameterService;
use Afrikpay\SymfonyUtilities\Service\YamlTemplateService;
use App\Service\StatusAdapterService;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\SecurityBundle\Security;

class StatusAdapterServiceImpl extends \Afrikpay\SymfonyThirdpartyAdapter\Service\Impl\StatusAdapterServiceImpl implements StatusAdapterService
{
    /**
     * @param StatusService $appService
     * @param TransactionFindDtoMapper $requestMapper
     * @param TransactionDtoFindDtoMapper $entityMapper
     * @param TransactionApiRequestDtoMapper $apiRequestMapper
     * @param TransactionApiResponseDtoMapper $apiResponseMapper
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
        StatusService $appService,
        TransactionFindDtoMapper $requestMapper,
        TransactionDtoFindDtoMapper $entityMapper,
        TransactionApiRequestDtoMapper $apiRequestMapper,
        TransactionApiResponseDtoMapper $apiResponseMapper,
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