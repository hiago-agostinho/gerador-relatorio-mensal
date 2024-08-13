<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Auth\DefaultPasswordHasher;

class PessoasController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->loadModel('Pessoas');
        $this->loadComponent('Flash');
    }

    public function add()
    {
        $user = $this->Pessoas->newEmptyEntity();

        if ($this->request->is('post')) {
            $user = $this->Pessoas->patchEntity($user, $this->request->getData());
            $user->senha = (new DefaultPasswordHasher())->hash($user->senha);

            if ($user->getErrors()) {
                $this->Flash->error(__('O cadastro não pôde ser realizado. Por favor, verifique os erros abaixo e tente novamente.'));
            }
            else {
                if ($this->Pessoas->save($user)) {
                    $this->Flash->success(__('Cadastro realizado com sucesso.'));
                    return $this->redirect(['controller' => 'Home', 'action' => 'index']);
                }
                $this->Flash->error(__('O cadastro não pôde ser realizado. Por favor, tente novamente.'));
            }
        }

        $this->set(compact('user'));
    }
}
