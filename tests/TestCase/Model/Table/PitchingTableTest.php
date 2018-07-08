<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PitchingTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PitchingTable Test Case
 */
class PitchingTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PitchingTable
     */
    public $Pitching;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.pitching'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Pitching') ? [] : ['className' => PitchingTable::class];
        $this->Pitching = TableRegistry::getTableLocator()->get('Pitching', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Pitching);

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
