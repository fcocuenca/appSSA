<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Alumno Entity
 *
 * @property int $id_alumno
 * @property string $nombre
 * @property string $apellido1
 * @property string $apellido2
 * @property int $telefono
 */
class Alumno extends Entity
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
        'nombre' => true,
        'apellido1' => true,
        'apellido2' => true,
        'telefono' => true
    ];
}
