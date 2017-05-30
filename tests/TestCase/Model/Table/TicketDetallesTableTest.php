<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TicketDetallesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TicketDetallesTable Test Case
 */
class TicketDetallesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TicketDetallesTable
     */
    public $TicketDetalles;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ticket_detalles'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TicketDetalles') ? [] : ['className' => 'App\Model\Table\TicketDetallesTable'];
        $this->TicketDetalles = TableRegistry::get('TicketDetalles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TicketDetalles);

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
