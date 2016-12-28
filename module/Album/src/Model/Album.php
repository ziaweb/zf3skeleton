<?php

/*
 * Zia Web LLC
 */

namespace Album\Model;

use Interop\Container\ContainerInterface;

class Album
{
    protected $db;
    
    public function __construct(ContainerInterface $container)
    {
        $this->db;
    }

    public function listItems()
    {
        return [1, 2, 3, 5, 5];
    }

}
