<?php

namespace App\Mapper\Impl\Payment;

use App\Dto\Transaction\PaymentTransactionDto;
use App\Dto\Transaction\TransactionApiResponseDto;
use App\Mapper\Payment\TransactionApiResponseDtoMapper;

class TransactionApiResponseDtoMapperImpl extends \Afrikpay\SymfonyThirdpartyAdapter\Mapper\Impl\Payment\TransactionApiResponseDtoMapperImpl implements TransactionApiResponseDtoMapper
{
    /**
     * @param string $entityClass
     * @param string $dtoClass
     */
    public function __construct(string $entityClass = PaymentTransactionDto::class, string $dtoClass = TransactionApiResponseDto::class)
    {
        parent::__construct($entityClass, $dtoClass);
    }
}
