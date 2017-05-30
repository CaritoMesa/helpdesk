<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TicketCategorias Model
 *
 * @method \App\Model\Entity\TicketCategoria get($primaryKey, $options = [])
 * @method \App\Model\Entity\TicketCategoria newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TicketCategoria[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TicketCategoria|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TicketCategoria patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TicketCategoria[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TicketCategoria findOrCreate($search, callable $callback = null, $options = [])
 */
class TicketCategoriasTable extends Table
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

        $this->setTable('ticket_categorias');
        $this->setDisplayField('nombre');
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
