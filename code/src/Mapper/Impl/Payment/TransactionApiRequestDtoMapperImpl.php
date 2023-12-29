<?php

namespace App\Mapper\Impl\Payment;

use App\Dto\Transaction\PaymentTransactionDto;
use App\Dto\Transaction\TransactionApiRequestDto;
use Afrikpay\SymfonyThirdpartyAdapter\Mapper\Impl\Payment\TransactionApiRequestDtoMapperImpl as BaseTransactionApiRequestDtoMapperImpl;
use App\Mapper\Payment\TransactionApiRequestDtoMapper;

class TransactionApiRequestDtoMapperImpl extends BaseTransactionApiRequestDtoMapperImpl implements TransactionApiRequestDtoMapper
{
    /**
     * @param string $entityClass
     * @param string $dtoClass
     */
    public function __construct(string $entityClass = PaymentTransactionDto::class, string $dtoClass = TransactionApiRequestDto::class)
    {
        parent::__construct($entityClass, $dtoClass);
    }
}
