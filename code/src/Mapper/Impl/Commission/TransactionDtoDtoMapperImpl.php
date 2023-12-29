<?php

namespace App\Mapper\Impl\Commission;

use App\Dto\Transaction\CommissionTransactionDto;
use App\Dto\Transaction\TransactionCreateDto;
use App\Mapper\Commission\TransactionDtoDtoMapper;

class TransactionDtoDtoMapperImpl extends \Afrikpay\SymfonyThirdpartyAdapter\Mapper\Impl\Commission\TransactionDtoDtoMapperImpl implements TransactionDtoDtoMapper
{
    /**
     * @param string $entityClass
     * @param string $dtoClass
     */
    public function __construct(string $entityClass = CommissionTransactionDto::class, string $dtoClass = TransactionCreateDto::class)
    {
        parent::__construct($entityClass, $dtoClass);
    }
}
