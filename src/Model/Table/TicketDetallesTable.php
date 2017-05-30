<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TicketDetalles Model
 *
 * @method \App\Model\Entity\TicketDetalle get($primaryKey, $options = [])
 * @method \App\Model\Entity\TicketDetalle newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TicketDetalle[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TicketDetalle|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TicketDetalle patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TicketDetalle[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TicketDetalle findOrCreate($search, callable $callback = null, $options = [])
 */
class TicketDetallesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('ticket_detalles');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->integer('id_ticket')
            ->requirePresence('id_ticket', 'create')
            ->notEmpty('id_ticket');

        $validator
            ->requirePresence('descripción', 'create')
            ->notEmpty('descripción');

        $validator
            ->integer('id_desarrollo')
            ->requirePresence('id_desarrollo', 'create')
            ->notEmpty('id_desarrollo');

        return $validator;
    }
}
