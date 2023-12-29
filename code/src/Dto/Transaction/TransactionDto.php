<?php

namespace App\Dto\Transaction;

use Afrikpay\SymfonyThirdpartyAdapter\Dto\Reference\ReferenceDto;
use Afrikpay\SymfonyThirdpartyAdapter\Model\TransactionStatus;
use Afrikpay\SymfonyUtilities\Model\Status;

class TransactionDto extends \Afrikpay\SymfonyThirdpartyAdapter\Dto\Transaction\TransactionDto
{
    /**
     * @param int|null $transactionId
     * @param string|null $accountDepositNumber
     * @param string|null $accountCommissionNumber
     * @param string|null $accountName
     * @param string|null $username
     * @param string|null $referenceNumber
     * @param string|null $referenceName
     * @param float|null $amount
     * @param float|null $financialFees
     * @param float|null $financialCommission
     * @param float|null $providerFees
     * @param float|null $fees
     * @param string|null $phone
     * @param string|null $email
     * @param string|null $optionSlug
     * @param string|null $externalId
     * @param string|null $requestId
     * @param string|null $financialId
     * @param string|null $commissionId
     * @param string|null $providerId
     * @param string|null $rollbackId
     * @param int|null $providerCode
     * @param string|null $providerStatus
     * @param string|null $providerMessage
     * @param string|null $providerDate
     * @param float|null $providerBalance
     * @param string|null $callbackUrl
     * @param string|null $description
     * @param string|null $date
     * @param Status|TransactionStatus|null $status
     * @param ReferenceDto|null $reference
     * @param int|null $errorCode
     * @param string|null $errorMessage
     * @param string|null $errorType
     * @param string|null $uniqueId
     */
    public function __construct(
        int $transactionId = null,
        string $accountDepositNumber = null,
        string $accountCommissionNumber = null,
        string $accountName = null,
        string $username = null,
        string $referenceNumber = null,
        string $referenceName = null,
        float $amount = null,
        float $financialFees = null,
        float $financialCommission = null,
        float $providerFees = null,
        ?float $fees = 0,
        string $phone = null,
        string $email = null,
        string $optionSlug = null,
        string $externalId = null,
        string $requestId = null,
        string $financialId = null,
        string $commissionId = null,
        string $providerId = null,
        string $rollbackId = null,
        int $providerCode = null,
        string $providerStatus = null,
        string $providerMessage = null,
        string $providerDate = null,
        float $providerBalance = null,
        string $callbackUrl = null,
        string $description = null,
        string $date = null,
        Status|TransactionStatus $status = null,
        ReferenceDto $reference = null,
        int $errorCode = null,
        string $errorMessage = null,
        string $errorType = null,
        public ?string $uniqueId = null
    ) {
        parent::__construct(
            $transactionId,
            $accountDepositNumber,
            $accountCommissionNumber,
            $accountName,
            $username,
            $referenceNumber,
            $referenceName,
            $amount,
            $financialFees,
            $financialCommission,
            $providerFees,
            $fees,
            $phone,
            $email,
            $optionSlug,
            $externalId,
            $requestId,
            $financialId,
            $commissionId,
            $providerId,
            $rollbackId,
            $providerCode,
            $providerStatus,
            $providerMessage,
            $providerDate,
            $providerBalance,
            $callbackUrl,
            $description,
            $date,
            $status,
            $reference,
            $errorCode,
            $errorMessage,
            $errorType
        );
    }
}
