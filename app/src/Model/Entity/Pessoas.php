<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

class Pessoas extends Entity
{
    protected $_accessible = [
        'nome' => true,
        'email' => true,
        'senha' => true,
    ];

    protected function _setSenha($senha)
    {
        if (strlen($senha) > 0) {
            return (new DefaultPasswordHasher())->hash($senha);
        }
    }
}
