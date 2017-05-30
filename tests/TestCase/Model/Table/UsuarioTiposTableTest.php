<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsuarioTiposTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsuarioTiposTable Test Case
 */
class UsuarioTiposTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UsuarioTiposTable
     */
    public $UsuarioTipos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.usuario_tipos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('UsuarioTipos') ? [] : ['className' => 'App\Model\Table\UsuarioTiposTable'];
        $this->UsuarioTipos = TableRegistry::get('UsuarioTipos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UsuarioTipos);

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
