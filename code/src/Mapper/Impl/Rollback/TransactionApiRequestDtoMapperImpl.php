<?php

namespace App\Mapper\Impl\Rollback;

use App\Dto\Transaction\RollbackTransactionDto;
use App\Dto\Transaction\TransactionApiRequestDto;
use Afrikpay\SymfonyThirdpartyAdapter\Mapper\Impl\Rollback\TransactionApiRequestDtoMapperImpl as BaseTransactionApiRequestDtoMapperImpl;
use App\Mapper\Rollback\TransactionApiRequestDtoMapper;

class TransactionApiRequestDtoMapperImpl extends BaseTransactionApiRequestDtoMapperImpl implements TransactionApiRequestDtoMapper
{
    /**
     * @param string $entityClass
     * @param string $dtoClass
     */
    public function __construct(string $entityClass = RollbackTransactionDto::class, string $dtoClass = TransactionApiRequestDto::class)
    {
        parent::__construct($entityClass, $dtoClass);
    }
}
