<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CurrentDomainNamesRegistered Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\CurrentDomainNamesRegistered newEmptyEntity()
 * @method \App\Model\Entity\CurrentDomainNamesRegistered newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\CurrentDomainNamesRegistered[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CurrentDomainNamesRegistered get($primaryKey, $options = [])
 * @method \App\Model\Entity\CurrentDomainNamesRegistered findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\CurrentDomainNamesRegistered patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CurrentDomainNamesRegistered[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CurrentDomainNamesRegistered|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CurrentDomainNamesRegistered saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CurrentDomainNamesRegistered[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CurrentDomainNamesRegistered[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\CurrentDomainNamesRegistered[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CurrentDomainNamesRegistered[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CurrentDomainNamesRegisteredTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('current_domain_names_registered');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('domain_sld')
            ->maxLength('domain_sld', 255)
            ->allowEmptyString('domain_sld');

        $validator
            ->scalar('domain_tld')
            ->maxLength('domain_tld', 255)
            ->allowEmptyString('domain_tld');

        $validator
            ->integer('user_id')
            ->allowEmptyString('user_id');

        $validator
            ->scalar('date_registered')
            ->maxLength('date_registered', 255)
            ->allowEmptyString('date_registered');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('user_id', 'Users'), ['errorField' => 'user_id']);

        return $rules;
    }
}
