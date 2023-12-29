<?php

namespace App\Repository\Impl;

use App\Entity\Transaction;
use Afrikpay\SymfonyThirdpartyAdapter\Repository\Impl\TransactionRepositoryImpl as BaseTransactionRepositoryImpl;
use App\Repository\TransactionRepository;
use Doctrine\Persistence\ManagerRegistry;

class TransactionRepositoryImpl extends BaseTransactionRepositoryImpl implements TransactionRepository
{
    /**
     * @param ManagerRegistry $registry
     * @param string $entityClass
     */
    public function __construct(ManagerRegistry $registry, string $entityClass = Transaction::class)
    {
        parent::__construct($registry, $entityClass);
    }
}
