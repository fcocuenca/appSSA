<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Alumno Model
 *
 * @method \App\Model\Entity\Alumno get($primaryKey, $options = [])
 * @method \App\Model\Entity\Alumno newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Alumno[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Alumno|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Alumno patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Alumno[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Alumno findOrCreate($search, callable $callback = null, $options = [])
 */
class AlumnoTable extends Table
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

        $this->setTable('alumno');
        $this->setDisplayField('id_alumno');
        $this->setPrimaryKey('id_alumno');
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
            ->integer('id_alumno')
            ->allowEmpty('id_alumno', 'create');

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
