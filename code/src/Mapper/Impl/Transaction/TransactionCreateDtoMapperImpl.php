<?php

namespace App\Mapper\Impl\Transaction;

use Afrikpay\SymfonyThirdpartyAdapter\Mapper\Impl\Transaction\TransactionCreateDtoMapperImpl as BaseTransactionCreateDtoMapperImpl;
use App\Dto\Transaction\TransactionCreateDto;
use App\Mapper\Transaction\TransactionCreateDtoMapper;

class TransactionCreateDtoMapperImpl extends BaseTransactionCreateDtoMapperImpl implements TransactionCreateDtoMapper
{
    /**
     * @param string $entityClass
     * @param string $dtoClass
     */
    public function __construct(string $entityClass = TransactionCreateDto::class, string $dtoClass = TransactionCreateDto::class)
    {
        parent::__construct($entityClass, $dtoClass);
    }
}
