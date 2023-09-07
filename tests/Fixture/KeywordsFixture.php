<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * KeywordsFixture
 */
class KeywordsFixture extends TestFixture
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
                'division_id' => 1,
                'keyword_list' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
