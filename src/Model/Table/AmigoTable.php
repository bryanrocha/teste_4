<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Amigo Model
 *
 * @property |\Cake\ORM\Association\BelongsTo $Login
 *
 * @method \App\Model\Entity\Amigo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Amigo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Amigo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Amigo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Amigo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Amigo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Amigo findOrCreate($search, callable $callback = null, $options = [])
 */
class AmigoTable extends Table
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

        $this->setTable('amigo');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Login', [
            'foreignKey' => 'login_id',
            'joinType' => 'INNER'
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
            ->allowEmpty('id', 'create');

        $validator
            ->dateTime('aniversario')
            ->allowEmpty('aniversario');

        $validator
            ->scalar('nome')
            ->maxLength('nome', 255)
            ->allowEmpty('nome');

        $validator
            ->scalar('cidade')
            ->maxLength('cidade', 255)
            ->allowEmpty('cidade');

        $validator
            ->scalar('facebook')
            ->maxLength('facebook', 255)
            ->allowEmpty('facebook');

        $validator
            ->scalar('instagram')
            ->maxLength('instagram', 255)
            ->allowEmpty('instagram');

        $validator
            ->scalar('twitter')
            ->maxLength('twitter', 255)
            ->allowEmpty('twitter');

        $validator
            ->scalar('telefone')
            ->maxLength('telefone', 255)
            ->allowEmpty('telefone');

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
        $rules->add($rules->existsIn(['login_id'], 'Login'));

        return $rules;
    }
}
