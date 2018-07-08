<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Master Model
 *
 * @method \App\Model\Entity\Master get($primaryKey, $options = [])
 * @method \App\Model\Entity\Master newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Master[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Master|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Master|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Master patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Master[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Master findOrCreate($search, callable $callback = null, $options = [])
 */
class MasterTable extends Table
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

        $this->setTable('master');
        $this->setDisplayField('playerID');
        $this->setPrimaryKey('playerID');
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
            ->scalar('playerID')
            ->maxLength('playerID', 255)
            ->allowEmpty('playerID', 'create');

        $validator
            ->integer('birthYear')
            ->allowEmpty('birthYear');

        $validator
            ->integer('birthMonth')
            ->allowEmpty('birthMonth');

        $validator
            ->integer('birthDay')
            ->allowEmpty('birthDay');

        $validator
            ->scalar('birthCountry')
            ->maxLength('birthCountry', 255)
            ->allowEmpty('birthCountry');

        $validator
            ->scalar('birthState')
            ->maxLength('birthState', 255)
            ->allowEmpty('birthState');

        $validator
            ->scalar('birthCity')
            ->maxLength('birthCity', 255)
            ->allowEmpty('birthCity');

        $validator
            ->scalar('deathYear')
            ->maxLength('deathYear', 255)
            ->allowEmpty('deathYear');

        $validator
            ->scalar('deathMonth')
            ->maxLength('deathMonth', 255)
            ->allowEmpty('deathMonth');

        $validator
            ->scalar('deathDay')
            ->maxLength('deathDay', 255)
            ->allowEmpty('deathDay');

        $validator
            ->scalar('deathCountry')
            ->maxLength('deathCountry', 255)
            ->allowEmpty('deathCountry');

        $validator
            ->scalar('deathState')
            ->maxLength('deathState', 255)
            ->allowEmpty('deathState');

        $validator
            ->scalar('deathCity')
            ->maxLength('deathCity', 255)
            ->allowEmpty('deathCity');

        $validator
            ->scalar('nameFirst')
            ->maxLength('nameFirst', 255)
            ->allowEmpty('nameFirst');

        $validator
            ->scalar('nameLast')
            ->maxLength('nameLast', 255)
            ->allowEmpty('nameLast');

        $validator
            ->scalar('nameGiven')
            ->maxLength('nameGiven', 255)
            ->allowEmpty('nameGiven');

        $validator
            ->integer('weight')
            ->allowEmpty('weight');

        $validator
            ->integer('height')
            ->allowEmpty('height');

        $validator
            ->scalar('bats')
            ->maxLength('bats', 255)
            ->allowEmpty('bats');

        $validator
            ->scalar('throws')
            ->maxLength('throws', 255)
            ->allowEmpty('throws');

        $validator
            ->scalar('debut')
            ->maxLength('debut', 255)
            ->allowEmpty('debut');

        $validator
            ->scalar('finalGame')
            ->maxLength('finalGame', 255)
            ->allowEmpty('finalGame');

        $validator
            ->scalar('retroID')
            ->maxLength('retroID', 255)
            ->allowEmpty('retroID');

        $validator
            ->scalar('bbrefID')
            ->maxLength('bbrefID', 255)
            ->allowEmpty('bbrefID');

        return $validator;
    }

    public function findPlayer(Query $query, array $options){
        return $this->findAllByNamelast($options['players'][0])
            ->distinct(['playerID']);
    }
}
