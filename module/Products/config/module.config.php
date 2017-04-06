<?php

namespace Products;

use Zend\Router\Http\Literal;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'controllers' => [
        'factories' => [
            Controller\ProductsController::class => InvokableFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'products' => [
                'type'    => Literal::class,
                'options' => [
                    'route' => '/products',
                    'defaults' => [
                        'controller' => Controller\ProductsController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            'products' => __DIR__ . '/../view',
        ],
    ],
];