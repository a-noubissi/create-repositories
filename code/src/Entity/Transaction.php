<?php

namespace App\Entity;

use Afrikpay\SymfonyThirdpartyAdapter\Entity\Reference;
use Afrikpay\SymfonyThirdpartyAdapter\Model\TransactionStatus;
use Afrikpay\SymfonyUtilities\Model\DateTime;
use Afrikpay\SymfonyUtilities\Model\Status;
use App\Repository\Impl\TransactionRepositoryImpl;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;

#[Entity(repositoryClass: TransactionRepositoryImpl::class)]
#[Table(name: self::TABLE_NAME)]
class Transaction extends \Afrikpay\SymfonyThirdpartyAdapter\Entity\Transaction
{
    public const UNIQUE_ID = 'uniqueId';

    #[Column(type: 'string', nullable: true)]
    public ?string $uniqueId;

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
     * @param string|null $phone
     * @param string|null $email
     * @param string|null $optionSlug
     * @param string|null $externalId
     * @param string|null $requestId
     * @param string|null $financialId
     * @param string|null $providerId
     * @param string|null $commissionId
     * @param string|null $rollbackId
     * @param int|null $providerCode
     * @param string|null $providerStatus
     * @param string|null $providerMessage
     * @param DateTime|null $providerDate
     * @param float|null $providerBalance
     * @param string|null $callbackUrl
     * @param int|null $errorCode
     * @param string|null $errorMessage
     * @param string|null $errorType
     * @param Status|TransactionStatus $status
     * @param Reference|null $reference
     * @param string|null $description
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
        string $phone = null,
        string $email = null,
        string $optionSlug = null,
        string $externalId = null,
        string $requestId = null,
        string $financialId = null,
        string $providerId = null,
        string $commissionId = null,
        string $rollbackId = null,
        int $providerCode = null,
        string $providerStatus = null,
        string $providerMessage = null,
        DateTime $providerDate = null,
        float $providerBalance = null,
        string $callbackUrl = null,
        int $errorCode = null,
        string $errorMessage = null,
        string $errorType = null,
        Status|TransactionStatus $status = TransactionStatus::PENDING,
        Reference $reference = null,
        string $description = null,
        string $uniqueId = null
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
            $phone,
            $email,
            $optionSlug,
            $externalId,
            $requestId,
            $financialId,
            $providerId,
            $commissionId,
            $rollbackId,
            $providerCode,
            $providerStatus,
            $providerMessage,
            $providerDate,
            $providerBalance,
            $callbackUrl,
            $errorCode,
            $errorMessage,
            $errorType,
            $status,
            $reference,
            $description
        );
        $this->uniqueId = Transaction::generateUniqueId();
    }

    /**
     * @return string|null
     */
    public function getUniqueId(): ?string
    {
        return $this->uniqueId;
    }

    /**
     * @param string|null $uniqueId
     */
    public function setUniqueId(?string $uniqueId): void
    {
        $this->uniqueId = $uniqueId;
    }

    /**
     * @return string
     *
     * @throws \Exception
     */
    public static function generateUniqueId(): string
    {
        // Generate 16 bytes (128 bits) of random data or use the data passed into the function.
        $data = $data ?? random_bytes(16);
        assert(strlen($data) == 16);

        // Set version to 0100
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
        // Set bits 6-7 to 10
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80);

        // Output the 36 character UUID.
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }
}
