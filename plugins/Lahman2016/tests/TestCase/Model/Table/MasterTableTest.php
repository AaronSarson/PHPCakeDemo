<?php
namespace Lahman2016\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Lahman2016\Model\Table\MasterTable;

/**
 * Lahman2016\Model\Table\MasterTable Test Case
 */
class MasterTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Lahman2016\Model\Table\MasterTable
     */
    public $Master;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.lahman2016.master'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Master') ? [] : ['className' => MasterTable::class];
        $this->Master = TableRegistry::getTableLocator()->get('Master', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Master);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
