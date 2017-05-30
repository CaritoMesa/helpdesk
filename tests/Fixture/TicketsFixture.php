<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TicketsFixture
 *
 */
class TicketsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nombre' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'descripcion' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'categoria_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tipo_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'contacto_adicional' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'fecha_cerrado' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'sla' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'tiempo respuesta en horas laborales', 'precision' => null, 'autoIncrement' => null],
        'estado_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'solicitante_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tecnico_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'categoria_id' => ['type' => 'index', 'columns' => ['categoria_id'], 'length' => []],
            'tipo_id' => ['type' => 'index', 'columns' => ['tipo_id'], 'length' => []],
            'estado_id' => ['type' => 'index', 'columns' => ['estado_id'], 'length' => []],
            'solicitante_id' => ['type' => 'index', 'columns' => ['solicitante_id'], 'length' => []],
            'tecnico_id' => ['type' => 'index', 'columns' => ['tecnico_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'r_categoria' => ['type' => 'foreign', 'columns' => ['categoria_id'], 'references' => ['ticket_categorias', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'r_estado' => ['type' => 'foreign', 'columns' => ['estado_id'], 'references' => ['ticket_estados', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'r_solicitante' => ['type' => 'foreign', 'columns' => ['solicitante_id'], 'references' => ['usuarios', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'r_tecnico' => ['type' => 'foreign', 'columns' => ['tecnico_id'], 'references' => ['usuarios', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'r_tipo' => ['type' => 'foreign', 'columns' => ['tipo_id'], 'references' => ['tipo_tickets', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'nombre' => 'Lorem ipsum dolor sit amet',
            'descripcion' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'categoria_id' => 1,
            'tipo_id' => 1,
            'contacto_adicional' => 'Lorem ipsum dolor sit amet',
            'created' => '2017-05-30',
            'fecha_cerrado' => '2017-05-30',
            'sla' => 1,
            'estado_id' => 1,
            'solicitante_id' => 1,
            'tecnico_id' => 1
        ],
    ];
}
