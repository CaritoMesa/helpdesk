<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ticket Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $descripcion
 * @property int $id_categoria
 * @property int $id_tipo
 * @property string $contacto_adicional
 * @property \Cake\I18n\FrozenDate $fecha_abierto
 * @property \Cake\I18n\FrozenDate $fecha_cerrado
 * @property int $sla
 * @property int $id_estado
 * @property int $id_solicitante
 * @property int $id_tecnico
 */
class Ticket extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
