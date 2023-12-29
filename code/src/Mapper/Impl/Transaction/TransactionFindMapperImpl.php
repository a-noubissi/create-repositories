<?php

namespace App\Mapper\Impl\Transaction;


use App\Dto\Transaction\TransactionFindDto;
use App\Entity\Transaction;
use App\Mapper\Transaction\TransactionFindMapper;

class TransactionFindMapperImpl extends \Afrikpay\SymfonyThirdpartyAdapter\Mapper\Impl\Transaction\TransactionFindMapperImpl implements TransactionFindMapper
{
    /**
     * @param string $entityClass
     * @param string $dtoClass
     */
    public function __construct(string $entityClass = Transaction::class, string $dtoClass = TransactionFindDto::class) {
        parent::__construct($entityClass, $dtoClass);
    }
}