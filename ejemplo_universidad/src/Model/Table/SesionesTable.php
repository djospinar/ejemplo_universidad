<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sesiones Model
 *
 * @method \App\Model\Entity\Sesione get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sesione newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sesione[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sesione|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sesione patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sesione[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sesione findOrCreate($search, callable $callback = null, $options = [])
 */
class SesionesTable extends Table
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

        $this->setTable('sesiones');
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
            ->requirePresence('administrador', 'create')
            ->notEmpty('administrador');

        $validator
            ->requirePresence('cliente', 'create')
            ->notEmpty('cliente');

        return $validator;
    }
}
