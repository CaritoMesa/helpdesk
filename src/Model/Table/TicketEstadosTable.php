<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TicketEstados Model
 *
 * @method \App\Model\Entity\TicketEstado get($primaryKey, $options = [])
 * @method \App\Model\Entity\TicketEstado newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TicketEstado[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TicketEstado|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TicketEstado patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TicketEstado[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TicketEstado findOrCreate($search, callable $callback = null, $options = [])
 */
class TicketEstadosTable extends Table
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

        $this->setTable('ticket_estados');
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

        return $validator;
    }
}
