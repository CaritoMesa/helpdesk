<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipoTicketsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipoTicketsTable Test Case
 */
class TipoTicketsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TipoTicketsTable
     */
    public $TipoTickets;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tipo_tickets'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TipoTickets') ? [] : ['className' => 'App\Model\Table\TipoTicketsTable'];
        $this->TipoTickets = TableRegistry::get('TipoTickets', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TipoTickets);

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
