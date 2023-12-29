<?php

namespace App\Controller\Impl;

use App\Service\StatusAdapterService;

class StatusControllerImpl extends \Afrikpay\SymfonyThirdpartyAdapter\Controller\Impl\Partner\StatusControllerImpl
{
    /**
     * @param StatusAdapterService $statusAdapterService
     */
    public function __construct(StatusAdapterService $statusAdapterService)
    {
        parent::__construct($statusAdapterService);
    }
}