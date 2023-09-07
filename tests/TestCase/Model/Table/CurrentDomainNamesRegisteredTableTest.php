<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CurrentDomainNamesRegisteredTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CurrentDomainNamesRegisteredTable Test Case
 */
class CurrentDomainNamesRegisteredTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CurrentDomainNamesRegisteredTable
     */
    protected $CurrentDomainNamesRegistered;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.CurrentDomainNamesRegistered',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('CurrentDomainNamesRegistered') ? [] : ['className' => CurrentDomainNamesRegisteredTable::class];
        $this->CurrentDomainNamesRegistered = $this->getTableLocator()->get('CurrentDomainNamesRegistered', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->CurrentDomainNamesRegistered);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CurrentDomainNamesRegisteredTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\CurrentDomainNamesRegisteredTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
