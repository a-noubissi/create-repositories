<?php

namespace App\Mapper\Impl\Transaction;

use App\Dto\Transaction\TransactionDto;
use App\Dto\Transaction\TransactionFindDto;
use App\Mapper\Transaction\TransactionDtoFindDtoMapper;

class TransactionDtoFindDtoMapperImpl extends \Afrikpay\SymfonyThirdpartyAdapter\Mapper\Impl\Transaction\TransactionDtoFindDtoMapperImpl implements TransactionDtoFindDtoMapper
{
    /**
     * @param string $entityClass
     * @param string $dtoClass
     */
    public function __construct(string $entityClass = TransactionDto::class, string $dtoClass = TransactionFindDto::class)
    {
        parent::__construct($entityClass, $dtoClass);
    }
}
