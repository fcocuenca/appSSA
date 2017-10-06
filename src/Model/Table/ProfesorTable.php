<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Profesor Model
 *
 * @method \App\Model\Entity\Profesor get($primaryKey, $options = [])
 * @method \App\Model\Entity\Profesor newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Profesor[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Profesor|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Profesor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Profesor[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Profesor findOrCreate($search, callable $callback = null, $options = [])
 */
class ProfesorTable extends Table
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

        $this->setTable('profesor');
        $this->setDisplayField('id_profesor');
        $this->setPrimaryKey('id_profesor');
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
            ->integer('id_profesor')
            ->allowEmpty('id_profesor', 'create');

        $validator
            ->scalar('nombre')
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre');

        $validator
            ->scalar('apellido1')
            ->allowEmpty('apellido1');

        $validator
            ->scalar('apellido2')
            ->allowEmpty('apellido2');

        $validator
            ->integer('telefono')
            ->allowEmpty('telefono');

        return $validator;
    }
}
