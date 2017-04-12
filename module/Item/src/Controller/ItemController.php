<?php

namespace Item\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ItemController extends AbstractActionController
{

    private $ItemModle;

    public function indexAction() {

          return[
            'date' => date('M d, Y - H:i:s'),
            'date1' => '$this->ItemModle',
        ];
    }

    public function addAction() {
        
    }

    public function editAction() {
        
    }

    public function deleteAction() {
        
    }

}
