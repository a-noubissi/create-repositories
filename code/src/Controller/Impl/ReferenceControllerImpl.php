<?php

namespace App\Controller\Impl;

use App\Service\ReferenceAdapterService;

class ReferenceControllerImpl extends \Afrikpay\SymfonyThirdpartyAdapter\Controller\Impl\Partner\ReferenceControllerImpl
{
    /**
     * @param ReferenceAdapterService $referenceService
     */
    public function __construct(ReferenceAdapterService $referenceService)
    {
        parent::__construct($referenceService);
    }
}
