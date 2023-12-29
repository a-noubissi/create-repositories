<?php

namespace App\Mapper\Impl\Commission;

use App\Dto\Transaction\TransactionCreateDto;
use App\Dto\Transaction\TransactionFinancialIdDto;
use App\Mapper\Commission\TransactionFinancialCreateMapper;

class TransactionFinancialCreateMapperImpl extends \Afrikpay\SymfonyThirdpartyAdapter\Mapper\Impl\Commission\TransactionFinancialCreateMapperImpl implements TransactionFinancialCreateMapper
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
