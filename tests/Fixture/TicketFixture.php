<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TicketFixture
 *
 */
class TicketFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'ticket';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nombre' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'descripcion' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'id_categoria' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_tipo' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'contacto_adicional' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'fecha_abierto' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'fecha_cerrado' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'sla' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'tiempo respuesta en horas laborales', 'precision' => null, 'autoIncrement' => null],
        'id_estado' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_solicitante' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_tecnico' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'id_categoria' => ['type' => 'index', 'columns' => ['id_categoria'], 'length' => []],
            'id_tipo' => ['type' => 'index', 'columns' => ['id_tipo'], 'length' => []],
            'id_estado' => ['type' => 'index', 'columns' => ['id_estado'], 'length' => []],
            'solicitante' => ['type' => 'index', 'columns' => ['id_solicitante'], 'length' => []],
            'tecnico' => ['type' => 'index', 'columns' => ['id_tecnico'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'id_categoria' => ['type' => 'foreign', 'columns' => ['id_categoria'], 'references' => ['categoria', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'id_estado' => ['type' => 'foreign', 'columns' => ['id_estado'], 'references' => ['estado', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'id_tipo' => ['type' => 'foreign', 'columns' => ['id_tipo'], 'references' => ['tipo', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'solicitante' => ['type' => 'foreign', 'columns' => ['id_solicitante'], 'references' => ['usuario', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'tecnico' => ['type' => 'foreign', 'columns' => ['id_tecnico'], 'references' => ['usuario', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'id_categoria' => 1,
            'id_tipo' => 1,
            'contacto_adicional' => 'Lorem ipsum dolor sit amet',
            'fecha_abierto' => '2017-05-16',
            'fecha_cerrado' => '2017-05-16',
            'sla' => 1,
            'id_estado' => 1,
            'id_solicitante' => 1,
            'id_tecnico' => 1
        ],
    ];
}
