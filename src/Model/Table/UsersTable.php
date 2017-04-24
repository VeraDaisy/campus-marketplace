<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 */
class UsersTable extends Table
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

        $this->setTable('users');
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
            ->requirePresence('first_name', 'create')
            ->notEmpty('first_name');

        $validator
            ->requirePresence('last_name', 'create')
            ->notEmpty('last_name');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->requirePresence('username', 'create')
            ->notEmpty('username')
            ->add('username', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->isUnique(['username']));

        return $rules;
    }

    // /*
    // * Pay attention to method naming convention "validation"+{custom}
    // */
    // public function validationAdd(Validator $validator) {
    //   // Include all default validation rules as well:
    //   $validator = $this->validationDefault($validator);
    //
    //   // // Check for vt.edu domain
    //   // $validator->add('email', 'isValidDomain', [
    //   //   'rule' => array('isValidDomain', '/^[A-Z0-9._%+-]+@vt.edu$/i'),
    //   //   'message' => 'Email must be from the university address @vt.edu.'
    //   // ]);
    //
    //   // $validator->add("email", "validFormat", [
    //   //   "rule" => ["email", false, '/^[A-Z0-9._%+-]+@vt.edu$/i'],
    //   //   "message" => "Email must be from the university address @vt.edu."
    //   // ]);
    //
    //   // $validator->add("email", "email", [
    //   //   "rule" => array('custom', '/^[A-Z0-9._%+-]+@vt.edu$/i'),
    //   //   // 'rule' => array('custom', '/^[A-Z0-9._%+-]+@vt.edu$/i'),
    //   //   "message" => "Email must be from the university address @vt.edu."
    //   // ]);
    //
    //   // $validator
    //   //  ->notEmpty('sl_no')
    //   //  ->add('reg_no', 'validFormat',[
    //   //          'rule' => array('custom', '/^([ABCD]{2,2}[0-9]{4,4})$/i'),
    //   //          'message' => 'Please enter a valid serial number.'
    //   //  ]);
    //   return $validator;
    // }
}
