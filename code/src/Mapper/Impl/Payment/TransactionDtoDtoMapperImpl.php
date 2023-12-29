<?php

namespace App\Mapper\Impl\Payment;

use App\Dto\Transaction\PaymentTransactionDto;
use App\Dto\Transaction\TransactionCreateDto;
use App\Mapper\Payment\TransactionDtoDtoMapper;

class TransactionDtoDtoMapperImpl extends \Afrikpay\SymfonyThirdpartyAdapter\Mapper\Impl\Payment\TransactionDtoDtoMapperImpl implements TransactionDtoDtoMapper
{
    /**
     * @param string $entityClass
     * @param string $dtoClass
     */
    public function __construct(string $entityClass = PaymentTransactionDto::class, string $dtoClass = TransactionCreateDto::class)
    {
        parent::__construct($entityClass, $dtoClass);
    }
}
