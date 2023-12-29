<?php

namespace App\Service\Impl;

use Afrikpay\SymfonyAdapter\Service\AdapterLogService;
use Afrikpay\SymfonyAdapter\Service\TokenAdapterService;
use App\Mapper\Commission\TransactionApiRequestDtoMapper;
use App\Mapper\Commission\TransactionApiResponseDtoMapper;
use App\Mapper\Commission\TransactionDtoDtoMapper;
use App\Mapper\Commission\TransactionFinancialCreateMapper;
use Afrikpay\SymfonyThirdpartyAdapter\Service\Impl\TransactionCommissionAdapterServiceImpl as BaseTransactionCommissionAdapterServiceImpl;
use Afrikpay\SymfonyThirdpartyAdapter\Service\TemplateService;
use Afrikpay\SymfonyUtilities\Service\HttpService;
use Afrikpay\SymfonyUtilities\Service\ParameterService;
use Afrikpay\SymfonyUtilities\Service\YamlTemplateService;
use App\Service\CommissionTransactionService;
use App\Service\TransactionCommissionAdapterService;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\SecurityBundle\Security;

class TransactionCommissionAdapterServiceImpl extends BaseTransactionCommissionAdapterServiceImpl implements TransactionCommissionAdapterService
{
    /**
     * @param Security $security
     * @param TokenAdapterService $tokenAdapterService
     * @param CommissionTransactionService $appService
     * @param TransactionFinancialCreateMapper $requestMapper
     * @param TransactionDtoDtoMapper $entityMapper
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
        CommissionTransactionService $appService,
        TransactionFinancialCreateMapper $requestMapper,
        TransactionDtoDtoMapper $entityMapper,
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