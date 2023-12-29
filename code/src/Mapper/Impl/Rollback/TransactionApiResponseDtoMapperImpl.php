<?php

namespace App\Mapper\Impl\Rollback;

use App\Dto\Transaction\RollbackTransactionDto;
use App\Dto\Transaction\TransactionApiResponseDto;
use App\Mapper\Rollback\TransactionApiResponseDtoMapper;

class TransactionApiResponseDtoMapperImpl extends \Afrikpay\SymfonyThirdpartyAdapter\Mapper\Impl\Rollback\TransactionApiResponseDtoMapperImpl implements TransactionApiResponseDtoMapper
{
    /**
     * @param string $entityClass
     * @param string $dtoClass
     */
    public function __construct(string $entityClass = RollbackTransactionDto::class, string $dtoClass = TransactionApiResponseDto::class)
    {
        parent::__construct($entityClass, $dtoClass);
    }
}
