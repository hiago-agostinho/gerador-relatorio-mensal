<?php
namespace App\Controller;

use Cake\Auth\DefaultPasswordHasher;

class UsersController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->loadModel('Pessoas');
        $this->loadComponent('Flash');
    }

    public function login()
    {
        if ($this->request->is('post')) {
            $email = $this->request->getData('email');
            $password = $this->request->getData('senha');
            $user = $this->Pessoas->findByEmail($email)->first();

            if ($user && (new DefaultPasswordHasher())->check($password, $user->senha)) {
                $this->request->getSession()->write('user_id', $user->id);
                return $this->redirect(['controller' => 'Home', 'action' => 'index']);
            }

            $this->Flash->error(__('Usuário ou senha inválidos.'));
        }
    }

    public function logout()
    {
        $this->request->getSession()->delete('user_id');
        return $this->redirect(['controller' => 'Home', 'action' => 'index']);
    }
}
