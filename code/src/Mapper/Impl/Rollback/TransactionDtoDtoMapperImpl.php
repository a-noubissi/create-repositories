<?php

namespace App\Mapper\Impl\Rollback;

use App\Dto\Transaction\RollbackTransactionDto;
use App\Dto\Transaction\TransactionCreateDto;
use App\Mapper\Rollback\TransactionDtoDtoMapper;

class TransactionDtoDtoMapperImpl extends \Afrikpay\SymfonyThirdpartyAdapter\Mapper\Impl\Rollback\TransactionDtoDtoMapperImpl implements TransactionDtoDtoMapper
{
    /**
     * @param string $entityClass
     * @param string $dtoClass
     */
    public function __construct(string $entityClass = RollbackTransactionDto::class, string $dtoClass = TransactionCreateDto::class)
    {
        parent::__construct($entityClass, $dtoClass);
    }
}
