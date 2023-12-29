<?php

namespace App\Mapper\Impl\Commission;

use App\Dto\Transaction\CommissionTransactionDto;
use App\Dto\Transaction\TransactionApiRequestDto;
use Afrikpay\SymfonyThirdpartyAdapter\Mapper\Impl\Commission\TransactionApiRequestDtoMapperImpl as BaseTransactionApiRequestDtoMapperImpl;
use App\Mapper\Commission\TransactionApiRequestDtoMapper;

class TransactionApiRequestDtoMapperImpl extends BaseTransactionApiRequestDtoMapperImpl implements TransactionApiRequestDtoMapper
{
    /**
     * @param string $entityClass
     * @param string $dtoClass
     */
    public function __construct(string $entityClass = CommissionTransactionDto::class, string $dtoClass = TransactionApiRequestDto::class)
    {
        parent::__construct($entityClass, $dtoClass);
    }
}
