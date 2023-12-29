<?php

namespace App\Mapper\Impl\Transaction;

use Afrikpay\SymfonyThirdpartyAdapter\Mapper\Impl\Transaction\TransactionApiRequestDtoMapperImpl as BaseTransactionApiRequestDtoMapperImpl;
use App\Dto\Transaction\TransactionApiRequestDto;
use App\Dto\Transaction\TransactionDto;
use App\Mapper\Transaction\TransactionApiRequestDtoMapper;

class TransactionApiRequestDtoMapperImpl extends BaseTransactionApiRequestDtoMapperImpl implements TransactionApiRequestDtoMapper
{
    /**
     * @param string $entityClass
     * @param string $dtoClass
     */
    public function __construct(string $entityClass = TransactionDto::class, string $dtoClass = TransactionApiRequestDto::class)
    {
        parent::__construct($entityClass, $dtoClass);
    }
}
