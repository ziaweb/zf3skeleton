<?php

namespace Products\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class ProductsController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }

    public function addAction()
    {
    }

    public function editAction()
    {
    }

    public function deleteAction()
    {
    }
}