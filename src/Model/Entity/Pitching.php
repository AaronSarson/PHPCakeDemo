<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pitching Entity
 *
 * @property string $playerID
 * @property int $yearID
 * @property int $stint
 * @property string $teamID
 * @property string $lgID
 * @property int $W
 * @property int $L
 * @property int $G
 * @property int $GS
 * @property int $CG
 * @property int $SHO
 * @property int $SV
 * @property int $IPouts
 * @property int $H
 * @property int $ER
 * @property int $HR
 * @property int $BB
 * @property int $SO
 * @property string $BAOpp
 * @property float $ERA
 * @property string $IBB
 * @property string $WP
 * @property string $HBP
 * @property int $BK
 * @property string $BFP
 * @property string $GF
 * @property int $R
 * @property string $SH
 * @property string $SF
 * @property string $GIDP
 */
class Pitching extends Entity
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
        'teamID' => true,
        'lgID' => true,
        'W' => true,
        'L' => true,
        'G' => true,
        'GS' => true,
        'CG' => true,
        'SHO' => true,
        'SV' => true,
        'IPouts' => true,
        'H' => true,
        'ER' => true,
        'HR' => true,
        'BB' => true,
        'SO' => true,
        'BAOpp' => true,
        'ERA' => true,
        'IBB' => true,
        'WP' => true,
        'HBP' => true,
        'BK' => true,
        'BFP' => true,
        'GF' => true,
        'R' => true,
        'SH' => true,
        'SF' => true,
        'GIDP' => true
    ];
}
