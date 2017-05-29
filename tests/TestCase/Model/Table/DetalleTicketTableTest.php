<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DetalleTicketTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DetalleTicketTable Test Case
 */
class DetalleTicketTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DetalleTicketTable
     */
    public $DetalleTicket;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.detalle_ticket'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DetalleTicket') ? [] : ['className' => 'App\Model\Table\DetalleTicketTable'];
        $this->DetalleTicket = TableRegistry::get('DetalleTicket', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DetalleTicket);

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
