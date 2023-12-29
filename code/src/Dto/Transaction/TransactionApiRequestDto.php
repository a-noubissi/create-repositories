<?php

namespace App\Dto\Transaction;

class TransactionApiRequestDto extends \Afrikpay\SymfonyThirdpartyAdapter\Dto\Transaction\TransactionApiRequestDto
{
    /**
     * @param string|null $referenceNumber
     * @param string|null $username
     * @param float|null $amount
     * @param string|null $phone
     * @param string|null $email
     * @param string|null $requestId
     * @param string|null $externalId
     * @param string|null $financialId
     * @param int|null $transactionId
     * @param string|null $optionSlug
     * @param string|null $callbackUrl
     * @param string|null $description
     * @param float|null $financialFees
     * @param float|null $financialCommission
     * @param float|null $providerFees
     * @param string|null $date
     * @param string|null $uniqueId
     */
    public function __construct(
        string $referenceNumber = null,
        string $username = null,
        float $amount = null,
        string $phone = null,
        string $email = null,
        string $requestId = null,
        string $externalId = null,
        string $financialId = null,
        int $transactionId = null,
        string $optionSlug = null,
        string $callbackUrl = null,
        string $description = null,
        float $financialFees = null,
        float $financialCommission = null,
        float $providerFees = null,
        string $date = null,
        public ?string $uniqueId = null
    ) {
        parent::__construct(
            $referenceNumber,
            $username,
            $amount,
            $phone,
            $email,
            $requestId,
            $externalId,
            $financialId,
            $transactionId,
            $optionSlug,
            $callbackUrl,
            $description,
            $financialFees,
            $financialCommission,
            $providerFees,
            $date
        );
    }
}
