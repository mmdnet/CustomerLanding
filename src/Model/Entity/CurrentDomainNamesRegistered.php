<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CurrentDomainNamesRegistered Entity
 *
 * @property int $id
 * @property string|null $domain_sld
 * @property string|null $domain_tld
 * @property int|null $user_id
 * @property string|null $date_registered
 *
 * @property \App\Model\Entity\User $user
 */
class CurrentDomainNamesRegistered extends Entity
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
        'domain_sld' => true,
        'domain_tld' => true,
        'user_id' => true,
        'date_registered' => true,
        'user' => true,
    ];
}
