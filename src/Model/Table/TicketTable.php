<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ticket Model
 *
 * @method \App\Model\Entity\Ticket get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ticket newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Ticket[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ticket|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ticket patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ticket[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ticket findOrCreate($search, callable $callback = null, $options = [])
 */
class TicketTable extends Table
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

        $this->setTable('ticket');
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
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre');

        $validator
            ->requirePresence('descripcion', 'create')
            ->notEmpty('descripcion');

        $validator
            ->integer('id_categoria')
            ->requirePresence('id_categoria', 'create')
            ->notEmpty('id_categoria');

        $validator
            ->integer('id_tipo')
            ->requirePresence('id_tipo', 'create')
            ->notEmpty('id_tipo');

        $validator
            ->requirePresence('contacto_adicional', 'create')
            ->notEmpty('contacto_adicional');

        $validator
            ->date('fecha_abierto')
            ->requirePresence('fecha_abierto', 'create')
            ->notEmpty('fecha_abierto');

        $validator
            ->date('fecha_cerrado')
            ->requirePresence('fecha_cerrado', 'create')
            ->notEmpty('fecha_cerrado');

        $validator
            ->integer('sla')
            ->requirePresence('sla', 'create')
            ->notEmpty('sla');

        $validator
            ->integer('id_estado')
            ->requirePresence('id_estado', 'create')
            ->notEmpty('id_estado');

        $validator
            ->integer('id_solicitante')
            ->requirePresence('id_solicitante', 'create')
            ->notEmpty('id_solicitante');

        $validator
            ->integer('id_tecnico')
            ->requirePresence('id_tecnico', 'create')
            ->notEmpty('id_tecnico');

        return $validator;
    }
}
