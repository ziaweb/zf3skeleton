<?php

/*
 * Zia Web LLC
 */

namespace Products\Controller;

//use Album\Model\Album;
use Interop\Container\ContainerInterface;
use Zend\Mvc\Controller\AbstractActionController;
//use Zend\View\Model\ViewModel;

class ProductsController extends AbstractActionController
{
    /**
     *
     * @var Album 
     */
    private $albumModle;
    
    public function __construct(ContainerInterface $container)
    {
        //$this->albumModle = $container->get(Products::class);
    }

    public function indexAction()
    {
        //var_dump($this->albumModle->listItems());
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
