<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Usuario Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Tipo
 *
 * @method \App\Model\Entity\Usuario get($primaryKey, $options = [])
 * @method \App\Model\Entity\Usuario newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Usuario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Usuario|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Usuario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Usuario[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Usuario findOrCreate($search, callable $callback = null, $options = [])
 */
class UsuarioTable extends Table
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

        $this->setTable('usuario');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsToMany('Tipo', [
            'foreignKey' => 'usuario_id',
            'targetForeignKey' => 'tipo_id',
            'joinTable' => 'usuario_tipo'
        ]);
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('lastname', 'create')
            ->notEmpty('lastname');

        $validator
            ->requirePresence('mail', 'create')
            ->notEmpty('mail');

        $validator
            ->requirePresence('telefono', 'create')
            ->notEmpty('telefono');

        $validator
            ->requirePresence('cargo', 'create')
            ->notEmpty('cargo');

        $validator
            ->integer('tipo')
            ->requirePresence('tipo', 'create')
            ->notEmpty('tipo');

        return $validator;
    }
}
