<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pitching Model
 *
 * @method \App\Model\Entity\Pitching get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pitching newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Pitching[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pitching|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pitching|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pitching patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pitching[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pitching findOrCreate($search, callable $callback = null, $options = [])
 */
class PitchingTable extends Table
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

        $this->setTable('pitching');
        $this->setDisplayField('playerID');
        $this->setPrimaryKey(['playerID', 'yearID', 'stint']);
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
            ->integer('yearID')
            ->allowEmpty('yearID', 'create');

        $validator
            ->integer('stint')
            ->allowEmpty('stint', 'create');

        $validator
            ->scalar('teamID')
            ->maxLength('teamID', 255)
            ->allowEmpty('teamID');

        $validator
            ->scalar('lgID')
            ->maxLength('lgID', 255)
            ->allowEmpty('lgID');

        $validator
            ->integer('W')
            ->allowEmpty('W');

        $validator
            ->integer('L')
            ->allowEmpty('L');

        $validator
            ->integer('G')
            ->allowEmpty('G');

        $validator
            ->integer('GS')
            ->allowEmpty('GS');

        $validator
            ->integer('CG')
            ->allowEmpty('CG');

        $validator
            ->integer('SHO')
            ->allowEmpty('SHO');

        $validator
            ->integer('SV')
            ->allowEmpty('SV');

        $validator
            ->integer('IPouts')
            ->allowEmpty('IPouts');

        $validator
            ->integer('H')
            ->allowEmpty('H');

        $validator
            ->integer('ER')
            ->allowEmpty('ER');

        $validator
            ->integer('HR')
            ->allowEmpty('HR');

        $validator
            ->integer('BB')
            ->allowEmpty('BB');

        $validator
            ->integer('SO')
            ->allowEmpty('SO');

        $validator
            ->scalar('BAOpp')
            ->maxLength('BAOpp', 255)
            ->allowEmpty('BAOpp');

        $validator
            ->numeric('ERA')
            ->allowEmpty('ERA');

        $validator
            ->scalar('IBB')
            ->maxLength('IBB', 255)
            ->allowEmpty('IBB');

        $validator
            ->scalar('WP')
            ->maxLength('WP', 255)
            ->allowEmpty('WP');

        $validator
            ->scalar('HBP')
            ->maxLength('HBP', 255)
            ->allowEmpty('HBP');

        $validator
            ->integer('BK')
            ->allowEmpty('BK');

        $validator
            ->scalar('BFP')
            ->maxLength('BFP', 255)
            ->allowEmpty('BFP');

        $validator
            ->scalar('GF')
            ->maxLength('GF', 255)
            ->allowEmpty('GF');

        $validator
            ->integer('R')
            ->allowEmpty('R');

        $validator
            ->scalar('SH')
            ->maxLength('SH', 255)
            ->allowEmpty('SH');

        $validator
            ->scalar('SF')
            ->maxLength('SF', 255)
            ->allowEmpty('SF');

        $validator
            ->scalar('GIDP')
            ->maxLength('GIDP', 255)
            ->allowEmpty('GIDP');

        return $validator;
    }
}
