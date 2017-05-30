<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TicketCategoriasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TicketCategoriasTable Test Case
 */
class TicketCategoriasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TicketCategoriasTable
     */
    public $TicketCategorias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ticket_categorias'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TicketCategorias') ? [] : ['className' => 'App\Model\Table\TicketCategoriasTable'];
        $this->TicketCategorias = TableRegistry::get('TicketCategorias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TicketCategorias);

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
