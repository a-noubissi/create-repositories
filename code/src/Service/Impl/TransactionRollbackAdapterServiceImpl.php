<?php

namespace App\Service\Impl;

use Afrikpay\SymfonyAdapter\Service\AdapterLogService;
use Afrikpay\SymfonyAdapter\Service\TokenAdapterService;
use App\Mapper\Rollback\TransactionApiRequestDtoMapper;
use App\Mapper\Rollback\TransactionApiResponseDtoMapper;
use App\Mapper\Rollback\TransactionDtoDtoMapper;
use App\Mapper\Rollback\TransactionFinancialCreateMapper;
use Afrikpay\SymfonyThirdpartyAdapter\Service\Impl\TransactionRollbackAdapterServiceImpl as BaseTransactionRollbackAdapterServiceImpl;
use Afrikpay\SymfonyThirdpartyAdapter\Service\TemplateService;
use Afrikpay\SymfonyUtilities\Service\HttpService;
use Afrikpay\SymfonyUtilities\Service\ParameterService;
use Afrikpay\SymfonyUtilities\Service\YamlTemplateService;
use App\Service\RollbackTransactionService;
use App\Service\TransactionRollbackAdapterService;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\SecurityBundle\Security;

class TransactionRollbackAdapterServiceImpl extends BaseTransactionRollbackAdapterServiceImpl implements TransactionRollbackAdapterService
{
    /**
     * @param Security $security
     * @param TokenAdapterService $tokenAdapterService
     * @param RollbackTransactionService $appService
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
        RollbackTransactionService $appService,
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