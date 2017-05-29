<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DesarrolloTicket Model
 *
 * @method \App\Model\Entity\DesarrolloTicket get($primaryKey, $options = [])
 * @method \App\Model\Entity\DesarrolloTicket newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DesarrolloTicket[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DesarrolloTicket|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DesarrolloTicket patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DesarrolloTicket[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DesarrolloTicket findOrCreate($search, callable $callback = null, $options = [])
 */
class DesarrolloTicketTable extends Table
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

        $this->setTable('desarrollo_ticket');
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
            ->integer('nombre')
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre');

        return $validator;
    }
}
