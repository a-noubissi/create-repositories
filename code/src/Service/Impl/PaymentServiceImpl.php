<?php

namespace App\Service\Impl;

use Afrikpay\SymfonyMessaging\Service\MailService;
use Afrikpay\SymfonyMessaging\Service\SmsSenderService;
use Afrikpay\SymfonyThirdpartyAdapter\Service\FeesAdapterService;
use Afrikpay\SymfonyUtilities\Service\MessageService;
use Afrikpay\SymfonyUtilities\Service\ParameterService;
use App\Mapper\Transaction\TransactionDtoDtoMapper;
use App\Mapper\Transaction\TransactionDtoFindDtoMapper;
use App\Service\PaymentAdapterService;
use App\Service\PaymentService;
use Afrikpay\SymfonyThirdpartyAdapter\Service\Impl\PaymentServiceImpl as BasePaymentServiceImpl;
use App\Service\ReferenceAdapterService;
use App\Service\StatusAdapterService;
use App\Service\TransactionAdapterService;
use App\Service\TransactionCommissionAdapterService;
use App\Service\TransactionRollbackAdapterService;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\SecurityBundle\Security;

class PaymentServiceImpl extends BasePaymentServiceImpl implements PaymentService
{
    /**
     * @param Security $security
     * @param PaymentAdapterService $paymentAdapterService
     * @param ParameterService $parameterService
     * @param FeesAdapterService $feesAdapterService
     * @param TransactionAdapterService $transactionAdapterService
     * @param TransactionRollbackAdapterService $transactionRollbackAdapterService
     * @param TransactionCommissionAdapterService $transactionCommissionAdapterService
     * @param ReferenceAdapterService $referenceAdapterService
     * @param StatusAdapterService $statusAdapterService
     * @param TransactionDtoDtoMapper $transactionDtoDtoMapper
     * @param TransactionDtoFindDtoMapper $transactionDtoFindDtoMapper
     * @param SmsSenderService $smsSenderService
     * @param MailService $mailService
     * @param MessageService $messageService
     * @param LoggerInterface $logger
     */
    public function __construct(
        Security $security,
        PaymentAdapterService $paymentAdapterService,
        ParameterService $parameterService,
        FeesAdapterService $feesAdapterService,
        TransactionAdapterService $transactionAdapterService,
        TransactionRollbackAdapterService $transactionRollbackAdapterService,
        TransactionCommissionAdapterService $transactionCommissionAdapterService,
        ReferenceAdapterService $referenceAdapterService,
        StatusAdapterService $statusAdapterService,
        TransactionDtoDtoMapper $transactionDtoDtoMapper,
        TransactionDtoFindDtoMapper $transactionDtoFindDtoMapper,
        SmsSenderService $smsSenderService,
        MailService $mailService,
        MessageService $messageService,
        LoggerInterface $logger
    ) {
        parent::__construct(
            $security,
            $paymentAdapterService,
            $parameterService,
            $feesAdapterService,
            $transactionAdapterService,
            $transactionRollbackAdapterService,
            $transactionCommissionAdapterService,
            $referenceAdapterService,
            $statusAdapterService,
            $transactionDtoDtoMapper,
            $transactionDtoFindDtoMapper,
            $smsSenderService,
            $mailService,
            $messageService,
            $logger
        );
    }
}