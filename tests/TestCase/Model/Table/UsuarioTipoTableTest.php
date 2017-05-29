<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsuarioTipoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsuarioTipoTable Test Case
 */
class UsuarioTipoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UsuarioTipoTable
     */
    public $UsuarioTipo;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.usuario_tipo'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('UsuarioTipo') ? [] : ['className' => 'App\Model\Table\UsuarioTipoTable'];
        $this->UsuarioTipo = TableRegistry::get('UsuarioTipo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UsuarioTipo);

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
