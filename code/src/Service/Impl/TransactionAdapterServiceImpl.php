<?php

namespace App\Service\Impl;

use Afrikpay\SymfonyAdapter\Service\AdapterLogService;
use Afrikpay\SymfonyAdapter\Service\TokenAdapterService;
use Afrikpay\SymfonyThirdpartyAdapter\Service\Impl\TransactionAdapterServiceImpl as BaseTransactionAdapterServiceImpl;
use Afrikpay\SymfonyThirdpartyAdapter\Service\TemplateService;
use Afrikpay\SymfonyUtilities\Service\HttpService;
use Afrikpay\SymfonyUtilities\Service\ParameterService;
use Afrikpay\SymfonyUtilities\Service\YamlTemplateService;
use App\Mapper\Transaction\TransactionApiRequestDtoMapper;
use App\Mapper\Transaction\TransactionApiResponseDtoMapper;
use App\Mapper\Transaction\TransactionCreateDtoMapper;
use App\Mapper\Transaction\TransactionDtoDtoMapper;
use App\Service\TransactionAdapterService;
use App\Service\TransactionService;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\SecurityBundle\Security;

class TransactionAdapterServiceImpl extends BaseTransactionAdapterServiceImpl implements TransactionAdapterService
{
    /**
     * @throws \ReflectionException
     */
    public function __construct(
        Security $security,
        TokenAdapterService $tokenAdapterService,
        TransactionService $appService,
        TransactionCreateDtoMapper $requestMapper,
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
