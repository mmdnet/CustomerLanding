<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ExtrasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ExtrasTable Test Case
 */
class ExtrasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ExtrasTable
     */
    protected $Extras;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Extras',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Extras') ? [] : ['className' => ExtrasTable::class];
        $this->Extras = $this->getTableLocator()->get('Extras', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Extras);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ExtrasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
