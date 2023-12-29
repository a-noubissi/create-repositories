<?php

namespace App\Mapper\Impl\Rollback;

use App\Dto\Transaction\TransactionCreateDto;
use App\Dto\Transaction\TransactionFinancialIdDto;
use App\Mapper\Rollback\TransactionFinancialCreateMapper;

class TransactionFinancialCreateMapperImpl extends \Afrikpay\SymfonyThirdpartyAdapter\Mapper\Impl\Rollback\TransactionFinancialCreateMapperImpl implements TransactionFinancialCreateMapper
{
    /**
     * @param string $entityClass
     * @param string $dtoClass
     */
    public function __construct(string $entityClass = TransactionCreateDto::class, string $dtoClass = TransactionFinancialIdDto::class)
    {
        parent::__construct($entityClass, $dtoClass);
    }
}
