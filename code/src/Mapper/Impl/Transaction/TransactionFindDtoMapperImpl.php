<?php

namespace App\Mapper\Impl\Transaction;

use App\Dto\Transaction\TransactionFindDto;
use App\Mapper\Transaction\TransactionFindDtoMapper;

class TransactionFindDtoMapperImpl extends \Afrikpay\SymfonyThirdpartyAdapter\Mapper\Impl\Transaction\TransactionFindDtoMapperImpl implements TransactionFindDtoMapper
{
    /**
     * @param string $entityClass
     * @param string $dtoClass
     */
    public function __construct(string $entityClass = TransactionFindDto::class, string $dtoClass = TransactionFindDto::class)
    {
        parent::__construct($entityClass, $dtoClass);
    }
}
