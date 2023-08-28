<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DivisionFixture
 */
class DivisionFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'division';
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
                'name' => 'Lorem ipsum dolor sit amet',
                'purpose' => 'Lorem ipsum dolor sit amet',
                'is_active' => 1,
            ],
        ];
        parent::init();
    }
}
