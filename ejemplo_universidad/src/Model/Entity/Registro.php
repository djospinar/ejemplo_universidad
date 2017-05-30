<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Registro Entity
 *
 * @property int $id
 * @property string $nombres
 * @property string $apellidos
 * @property string $correo
 * @property int $telefono
 *
 * @property \App\Model\Entity\Login[] $logins
 */
class Registro extends Entity
{

}
