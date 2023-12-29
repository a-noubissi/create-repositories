<?php


namespace App\Mapper\Impl\Payment;

use App\Dto\Transaction\PaymentTransactionDto;
use App\Entity\Transaction;
use App\Mapper\Reference\ReferenceMapper;
use App\Mapper\Payment\TransactionMapper;

class TransactionMapperImpl extends \Afrikpay\SymfonyThirdpartyAdapter\Mapper\Impl\Payment\TransactionMapperImpl implements TransactionMapper
{
    /**
     * @param ReferenceMapper $referenceMapper
     * @param string $entityClass
     * @param string $dtoClass
     */
    public function __construct(ReferenceMapper $referenceMapper, string $entityClass = Transaction::class, string $dtoClass = PaymentTransactionDto::class)
    {
        parent::__construct($referenceMapper, $entityClass, $dtoClass);
    }
}
