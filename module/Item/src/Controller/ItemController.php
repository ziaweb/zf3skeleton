<?php

namespace Item\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ItemController extends AbstractActionController
{

    public function indexAction() {
     $this->view->data['pass_one_thing'] = $this->model1->pass_all_mangoes();
$this->view->data['pass_another_thing'] = $this->model2->pass_all_oranges();
$this->load->view('viewfile', $data);
    }

    public function addAction() {
        
    }

    public function editAction() {
        
    }

    public function deleteAction() {
        
    }

}
