<?php

namespace App\Mapper\Impl\Transaction;

use Afrikpay\SymfonyThirdpartyAdapter\Mapper\Impl\Transaction\TransactionCreateMapperImpl as BaseTransactionCreateMapperImpl;
use App\Dto\Transaction\TransactionCreateDto;
use App\Entity\Transaction;
use App\Mapper\Transaction\TransactionCreateMapper;

class TransactionCreateMapperImpl extends BaseTransactionCreateMapperImpl implements TransactionCreateMapper
{
    /**
     * @param string $entityClass
     * @param string $dtoClass
     */
    public function __construct(string $entityClass = Transaction::class, string $dtoClass = TransactionCreateDto::class) {
        parent::__construct($entityClass, $dtoClass);
    }
}
