<?php

namespace App\Service\Impl;

use Afrikpay\SymfonyThirdpartyAdapter\Service\OptionService;
use Afrikpay\SymfonyUtilities\Service\ParameterService;
use App\Entity\Transaction;
use App\Mapper\Commission\TransactionMapper;
use App\Mapper\Reference\ReferenceMapper;
use App\Mapper\Transaction\TransactionCreateMapper;
use App\Mapper\Transaction\TransactionFindMapper;
use App\Repository\TransactionRepository;
use App\Service\CommissionTransactionService;
use App\Service\ReferenceAdapterService;
use Psr\Log\LoggerInterface;

class CommissionTransactionServiceImpl extends \Afrikpay\SymfonyThirdpartyAdapter\Service\Impl\CommissionTransactionServiceImpl implements CommissionTransactionService
{
    /**
     * @param TransactionRepository $transactionRepository
     * @param TransactionCreateMapper $transactionCreateMapper
     * @param TransactionMapper $transactionMapper
     * @param TransactionFindMapper $transactionFindMapper
     * @param ReferenceAdapterService $refenceAdapterService
     * @param ReferenceMapper $referenceMapper
     * @param OptionService $optionService
     * @param ParameterService $parameterService
     * @param LoggerInterface $logger
     * @param string $entityClass
     */
    public function __construct(
        TransactionRepository $transactionRepository,
        TransactionCreateMapper $transactionCreateMapper,
        TransactionMapper $transactionMapper,
        TransactionFindMapper $transactionFindMapper,
        ReferenceAdapterService $refenceAdapterService,
        ReferenceMapper $referenceMapper,
        OptionService $optionService,
        ParameterService $parameterService,
        LoggerInterface $logger,
        string $entityClass = Transaction::class
    ) {
        parent::__construct(
            $transactionRepository,
            $transactionCreateMapper,
            $transactionMapper,
            $transactionFindMapper,
            $refenceAdapterService,
            $referenceMapper,
            $optionService,
            $parameterService,
            $logger,
            $entityClass
        );
    }
}