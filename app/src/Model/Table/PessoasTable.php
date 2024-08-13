<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class PessoasTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);
        $this->setTable('pessoas');
        $this->setDisplayField('nome');
        $this->setPrimaryKey('id');
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->notEmptyString('nome')
            ->notEmptyString('email')
            ->notEmptyString('senha')
            ->notEmptyString('cpf', 'CPF é obrigatório')
            ->add('cpf', 'unique', [
                'rule' => 'validateUnique',
                'provider' => 'table',
                'message' => 'Este CPF já está cadastrado.'
            ]);

        return $validator;
    }

    public function findByEmail($email)
    {
        return $this->find()
            ->where(['email' => $email]);
    }
}
