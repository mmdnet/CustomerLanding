<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DomainsFixture
 */
class DomainsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'tld' => 'Lorem ipsum dolor sit amet',
                'sld' => 'Lorem ipsum dolor sit amet',
                'registration_date' => 'Lorem ipsum dolor sit amet',
                'user_id' => 1,
                'is_active' => 1,
                'next_payment_due' => 'Lorem ipsum dolor sit amet',
                'billing_cycle' => 'Lorem ipsum dolor sit amet',
                'rate_charged' => 1,
                'reseller_price' => 1,
            ],
        ];
        parent::init();
    }
}
