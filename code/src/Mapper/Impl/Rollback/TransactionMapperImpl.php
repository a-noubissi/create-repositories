<?php


namespace App\Mapper\Impl\Rollback;

use App\Dto\Transaction\RollbackTransactionDto;
use App\Entity\Transaction;
use App\Mapper\Reference\ReferenceMapper;
use App\Mapper\Rollback\TransactionMapper;

class TransactionMapperImpl extends \Afrikpay\SymfonyThirdpartyAdapter\Mapper\Impl\Rollback\TransactionMapperImpl implements TransactionMapper
{
    /**
     * @param ReferenceMapper $referenceMapper
     * @param string $entityClass
     * @param string $dtoClass
     */
    public function __construct(ReferenceMapper $referenceMapper, string $entityClass = Transaction::class, string $dtoClass = RollbackTransactionDto::class)
    {
        parent::__construct($referenceMapper, $entityClass, $dtoClass);
    }
}
