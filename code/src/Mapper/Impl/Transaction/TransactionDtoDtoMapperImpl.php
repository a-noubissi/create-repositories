<?php

namespace App\Mapper\Impl\Transaction;

use Afrikpay\SymfonyThirdpartyAdapter\Mapper\Impl\Transaction\TransactionDtoDtoMapperImpl as BaseTransactionDtoDtoMapperImpl;
use App\Dto\Transaction\TransactionCreateDto;
use App\Dto\Transaction\TransactionDto;
use App\Mapper\Transaction\TransactionDtoDtoMapper;

class TransactionDtoDtoMapperImpl extends BaseTransactionDtoDtoMapperImpl implements TransactionDtoDtoMapper
{
    /**
     * @param string $entityClass
     * @param string $dtoClass
     */
    public function __construct(string $entityClass = TransactionDto::class, string $dtoClass = TransactionCreateDto::class)
    {
        parent::__construct($entityClass, $dtoClass);
    }
}