<?php

namespace App\Repository\Impl;

use App\Entity\Reference;
use Afrikpay\SymfonyThirdpartyAdapter\Repository\Impl\ReferenceRepositoryImpl as BaseReferenceRepositoryImpl;
use App\Repository\ReferenceRepository;
use Doctrine\Persistence\ManagerRegistry;

class ReferenceRepositoryImpl extends BaseReferenceRepositoryImpl implements ReferenceRepository
{
    /**
     * @param ManagerRegistry $registry
     * @param string $entityClass
     */
    public function __construct(ManagerRegistry $registry, string $entityClass = Reference::class)
    {
        parent::__construct($registry, $entityClass);
    }
}