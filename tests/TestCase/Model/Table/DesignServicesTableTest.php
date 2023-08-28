<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DesignServicesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DesignServicesTable Test Case
 */
class DesignServicesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DesignServicesTable
     */
    protected $DesignServices;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.DesignServices',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('DesignServices') ? [] : ['className' => DesignServicesTable::class];
        $this->DesignServices = $this->getTableLocator()->get('DesignServices', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->DesignServices);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DesignServicesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
