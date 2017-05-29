<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DesarrolloTicketTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DesarrolloTicketTable Test Case
 */
class DesarrolloTicketTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DesarrolloTicketTable
     */
    public $DesarrolloTicket;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.desarrollo_ticket'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DesarrolloTicket') ? [] : ['className' => 'App\Model\Table\DesarrolloTicketTable'];
        $this->DesarrolloTicket = TableRegistry::get('DesarrolloTicket', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DesarrolloTicket);

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
