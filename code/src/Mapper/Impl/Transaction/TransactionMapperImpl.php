<?php

namespace App\Mapper\Impl\Transaction;


use App\Dto\Transaction\TransactionDto;
use App\Entity\Transaction;
use App\Mapper\Reference\ReferenceMapper;
use App\Mapper\Transaction\TransactionMapper;

class TransactionMapperImpl extends \Afrikpay\SymfonyThirdpartyAdapter\Mapper\Impl\Transaction\TransactionMapperImpl implements TransactionMapper
{
    /**
     * @param ReferenceMapper $referenceMapper
     * @param string $entityClass
     * @param string $dtoClass
     */
    public function __construct(ReferenceMapper $referenceMapper, string $entityClass = Transaction::class, string $dtoClass = TransactionDto::class)
    {
        parent::__construct($referenceMapper, $entityClass, $dtoClass);
    }
}
