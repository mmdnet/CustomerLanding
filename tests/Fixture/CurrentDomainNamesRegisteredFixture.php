<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CurrentDomainNamesRegisteredFixture
 */
class CurrentDomainNamesRegisteredFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'current_domain_names_registered';
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
                'domain_sld' => 'Lorem ipsum dolor sit amet',
                'domain_tld' => 'Lorem ipsum dolor sit amet',
                'user_id' => 1,
                'date_registered' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
