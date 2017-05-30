<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TicketEstadosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TicketEstadosTable Test Case
 */
class TicketEstadosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TicketEstadosTable
     */
    public $TicketEstados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ticket_estados'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TicketEstados') ? [] : ['className' => 'App\Model\Table\TicketEstadosTable'];
        $this->TicketEstados = TableRegistry::get('TicketEstados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TicketEstados);

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
