<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class HomeController extends AppController
{
    public function index()
    {
        $userId = $this->request->getSession()->read('user_id');
        
        $pessoa = TableRegistry::get('Pessoas')->find()->where(['id' => $userId])->first();

        $this->set(compact('pessoa'));
    }

    public function add()
    {
        $this->set(compact('pessoa'));
    }
}