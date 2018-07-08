<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Master Entity
 *
 * @property string $playerID
 * @property int $birthYear
 * @property int $birthMonth
 * @property int $birthDay
 * @property string $birthCountry
 * @property string $birthState
 * @property string $birthCity
 * @property string $deathYear
 * @property string $deathMonth
 * @property string $deathDay
 * @property string $deathCountry
 * @property string $deathState
 * @property string $deathCity
 * @property string $nameFirst
 * @property string $nameLast
 * @property string $nameGiven
 * @property int $weight
 * @property int $height
 * @property string $bats
 * @property string $throws
 * @property string $debut
 * @property string $finalGame
 * @property string $retroID
 * @property string $bbrefID
 */
class Master extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'birthYear' => true,
        'birthMonth' => true,
        'birthDay' => true,
        'birthCountry' => true,
        'birthState' => true,
        'birthCity' => true,
        'deathYear' => true,
        'deathMonth' => true,
        'deathDay' => true,
        'deathCountry' => true,
        'deathState' => true,
        'deathCity' => true,
        'nameFirst' => true,
        'nameLast' => true,
        'nameGiven' => true,
        'weight' => true,
        'height' => true,
        'bats' => true,
        'throws' => true,
        'debut' => true,
        'finalGame' => true,
        'retroID' => true,
        'bbrefID' => true
    ];
}
