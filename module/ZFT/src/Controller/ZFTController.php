<?php

namespace ZFT\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class ZFTController extends AbstractActionController
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