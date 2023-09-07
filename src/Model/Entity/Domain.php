<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Domain Entity
 *
 * @property int $id
 * @property string|null $tld
 * @property string|null $sld
 * @property string|null $registration_date
 * @property int|null $user_id
 * @property int|null $is_active
 * @property string|null $next_payment_due
 * @property string|null $billing_cycle
 * @property int|null $rate_charged
 * @property int|null $reseller_price
 *
 * @property \App\Model\Entity\User $user
 */
class Domain extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'tld' => true,
        'sld' => true,
        'registration_date' => true,
        'user_id' => true,
        'is_active' => true,
        'next_payment_due' => true,
        'billing_cycle' => true,
        'rate_charged' => true,
        'reseller_price' => true,
        'user' => true,
    ];
}
