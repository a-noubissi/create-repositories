<?php

/**
 * PHP Version 8.1
 * Reference.
 *
 * @category Entity
 *
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 *
 * @see     https://github.com/afrikpay/symfony-thirdparty-adapter/blob/master/src/Entity/Reference.php
 * @see https://github.com/afrikpay/symfony-thirdparty-adapter
 */

namespace App\Entity;

use App\Repository\Impl\ReferenceRepositoryImpl;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;

/**
 * PHP Version 8.1
 * Reference.
 *
 * @category Entity
 *
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 *
 * @see     https://github.com/afrikpay/symfony-thirdparty-adapter/blob/master/src/Entity/Reference.php
 * @see https://github.com/afrikpay/symfony-thirdparty-adapter
 */
#[Entity(repositoryClass: ReferenceRepositoryImpl::class)]
#[Table(name: self::TABLE_NAME)]
class Reference extends \Afrikpay\SymfonyThirdpartyAdapter\Entity\Reference
{
}
