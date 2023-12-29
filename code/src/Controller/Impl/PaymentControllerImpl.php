<?php

namespace App\Controller\Impl;

use App\Service\PaymentService;
use App\Controller\PaymentController;

class PaymentControllerImpl extends \Afrikpay\SymfonyThirdpartyAdapter\Controller\Impl\Partner\PaymentControllerImpl implements PaymentController
{
    /**
     * @param PaymentService $paymentService
     */
    public function __construct(PaymentService $paymentService)
    {
        parent::__construct($paymentService);
    }
}
