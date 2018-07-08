<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MasterTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MasterTable Test Case
 */
class MasterTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MasterTable
     */
    public $Master;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.master'
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
