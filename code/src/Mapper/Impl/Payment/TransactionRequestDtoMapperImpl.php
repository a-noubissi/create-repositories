<?php

namespace App\Mapper\Impl\Payment;


use App\Dto\Transaction\TransactionCreateDto;
use App\Dto\Transaction\TransactionRequestDto;
use App\Mapper\Payment\TransactionRequestDtoMapper;

class TransactionRequestDtoMapperImpl extends \Afrikpay\SymfonyThirdpartyAdapter\Mapper\Impl\Payment\TransactionRequestDtoMapperImpl implements TransactionRequestDtoMapper
{
    /**
     * @param string $entityClass
     * @param string $dtoClass
     */
    public function __construct(string $entityClass = TransactionCreateDto::class, string $dtoClass = TransactionRequestDto::class)
    {
        parent::__construct($entityClass, $dtoClass);
    }
}
