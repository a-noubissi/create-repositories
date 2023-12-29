<?php

namespace App\Service\Impl;


use App\Entity\Transaction;
use App\Mapper\Transaction\TransactionFindMapper;
use App\Mapper\Transaction\TransactionMapper;
use App\Repository\TransactionRepository;
use App\Service\TransactionService;
use App\Service\StatusService;

class StatusServiceImpl extends \Afrikpay\SymfonyThirdpartyAdapter\Service\Impl\StatusServiceImpl implements StatusService
{
    /**
     * @param TransactionMapper $transactionMapper
     * @param TransactionFindMapper $transactionFindMapper
     * @param TransactionRepository $transactionRepository
     * @param TransactionService $transactionService
     * @param string $entityClass
     */
    public function __construct(
        TransactionMapper $transactionMapper,
        TransactionFindMapper $transactionFindMapper,
        TransactionRepository $transactionRepository,
        TransactionService $transactionService,
        string $entityClass = Transaction::class
    ) {
        parent::__construct(
            $transactionMapper,
            $transactionFindMapper,
            $transactionRepository,
            $transactionService,
            $entityClass
        );
    }
}