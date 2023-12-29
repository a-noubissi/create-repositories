<?php

namespace App\Service\Impl;


use Afrikpay\SymfonyThirdpartyAdapter\Entity\Transaction;
use App\Mapper\Transaction\TransactionFindMapper;
use App\Mapper\Reference\ReferenceMapper;
use App\Mapper\Transaction\TransactionCreateMapper;
use App\Mapper\Transaction\TransactionMapper;
use App\Repository\TransactionRepository;
use Afrikpay\SymfonyThirdpartyAdapter\Service\OptionService;
use App\Service\ReferenceAdapterService;
use Afrikpay\SymfonyUtilities\Service\ParameterService;
use App\Service\TransactionService;
use Psr\Log\LoggerInterface;

class TransactionServiceImpl extends \Afrikpay\SymfonyThirdpartyAdapter\Service\Impl\TransactionServiceImpl implements TransactionService
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