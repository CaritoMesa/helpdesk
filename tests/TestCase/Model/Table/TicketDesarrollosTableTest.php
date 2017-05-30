<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TicketDesarrollosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TicketDesarrollosTable Test Case
 */
class TicketDesarrollosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TicketDesarrollosTable
     */
    public $TicketDesarrollos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ticket_desarrollos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TicketDesarrollos') ? [] : ['className' => 'App\Model\Table\TicketDesarrollosTable'];
        $this->TicketDesarrollos = TableRegistry::get('TicketDesarrollos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TicketDesarrollos);

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
