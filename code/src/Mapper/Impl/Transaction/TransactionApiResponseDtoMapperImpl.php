<?php

namespace App\Mapper\Impl\Transaction;

use Afrikpay\SymfonyThirdpartyAdapter\Mapper\Impl\Transaction\TransactionApiResponseDtoMapperImpl as BaseTransactionApiResponseDtoMapperImpl;
use App\Dto\Transaction\TransactionApiResponseDto;
use App\Dto\Transaction\TransactionDto;
use App\Mapper\Transaction\TransactionApiResponseDtoMapper;

class TransactionApiResponseDtoMapperImpl extends  BaseTransactionApiResponseDtoMapperImpl implements TransactionApiResponseDtoMapper
{
    /**
     * @param string $entityClass
     * @param string $dtoClass
     */
    public function __construct(string $entityClass = TransactionDto::class, string $dtoClass = TransactionApiResponseDto::class)
    {
        parent::__construct($entityClass, $dtoClass);
    }
}
