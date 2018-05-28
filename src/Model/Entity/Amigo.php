<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Amigo Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime $aniversario
 * @property string $nome
 * @property string $cidade
 * @property string $facebook
 * @property string $instagram
 * @property string $twitter
 * @property string $telefone
 */
class Amigo extends Entity
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
        'aniversario' => true,
        'nome' => true,
        'cidade' => true,
        'facebook' => true,
        'instagram' => true,
        'twitter' => true,
        'telefone' => true
    ];
}
