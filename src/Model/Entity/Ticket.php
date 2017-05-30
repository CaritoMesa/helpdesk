<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ticket Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $descripcion
 * @property int $categoria_id
 * @property int $tipo_id
 * @property string $contacto_adicional
 * @property \Cake\I18n\FrozenDate $created
 * @property \Cake\I18n\FrozenDate $fecha_cerrado
 * @property int $sla
 * @property int $estado_id
 * @property int $solicitante_id
 * @property int $tecnico_id
 *
 * @property \App\Model\Entity\TicketCategoria $ticket_categoria
 * @property \App\Model\Entity\TipoTicket $tipo_ticket
 * @property \App\Model\Entity\TicketEstado $ticket_estado
 * @property \App\Model\Entity\Usuario $usuario
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
