<?php

namespace App\Service\Impl;

use Afrikpay\SymfonyAdapter\Service\AdapterLogService;
use Afrikpay\SymfonyAdapter\Service\TokenAdapterService;
use App\Mapper\Payment\TransactionRequestDtoMapper;
use Afrikpay\SymfonyThirdpartyAdapter\Service\Impl\PaymentAdapterServiceImpl as BasePaymentAdapterServiceImpl;
use App\Service\PaymentTransactionService;
use Afrikpay\SymfonyThirdpartyAdapter\Service\TemplateService;
use Afrikpay\SymfonyUtilities\Service\HttpService;
use Afrikpay\SymfonyUtilities\Service\ParameterService;
use Afrikpay\SymfonyUtilities\Service\YamlTemplateService;
use App\Mapper\Payment\TransactionApiRequestDtoMapper;
use App\Mapper\Payment\TransactionApiResponseDtoMapper;
use App\Mapper\Payment\TransactionDtoDtoMapper;
use App\Service\PaymentAdapterService;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\SecurityBundle\Security;

class PaymentAdapterServiceImpl extends BasePaymentAdapterServiceImpl implements PaymentAdapterService
{
    /**
     * @param Security $security
     * @param TokenAdapterService $tokenAdapterService
     * @param PaymentTransactionService $appService
     * @param TransactionRequestDtoMapper $requestMapper
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
        PaymentTransactionService $appService,
        TransactionRequestDtoMapper $requestMapper,
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