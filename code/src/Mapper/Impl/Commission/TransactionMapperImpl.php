<?php


namespace App\Mapper\Impl\Commission;

use App\Dto\Transaction\CommissionTransactionDto;
use App\Entity\Transaction;
use App\Mapper\Reference\ReferenceMapper;
use App\Mapper\Commission\TransactionMapper;

class TransactionMapperImpl extends \Afrikpay\SymfonyThirdpartyAdapter\Mapper\Impl\Commission\TransactionMapperImpl implements TransactionMapper
{
    /**
     * @param ReferenceMapper $referenceMapper
     * @param string $entityClass
     * @param string $dtoClass
     */
    public function __construct(ReferenceMapper $referenceMapper, string $entityClass = Transaction::class, string $dtoClass = CommissionTransactionDto::class)
    {
        parent::__construct($referenceMapper, $entityClass, $dtoClass);
    }
}
