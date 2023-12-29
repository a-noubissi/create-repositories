<?php

namespace App\Mapper\Impl\Commission;

use App\Dto\Transaction\CommissionTransactionDto;
use App\Dto\Transaction\TransactionApiResponseDto;
use App\Mapper\Commission\TransactionApiResponseDtoMapper;

class TransactionApiResponseDtoMapperImpl extends \Afrikpay\SymfonyThirdpartyAdapter\Mapper\Impl\Commission\TransactionApiResponseDtoMapperImpl implements TransactionApiResponseDtoMapper
{
    /**
     * @param string $entityClass
     * @param string $dtoClass
     */
    public function __construct(string $entityClass = CommissionTransactionDto::class, string $dtoClass = TransactionApiResponseDto::class)
    {
        parent::__construct($entityClass, $dtoClass);
    }
}
