<?php

/**
 * Zia Web LLC
 */

namespace Products;

use Interop\Container\ContainerInterface;
use Zend\Router\Http\Literal;

return [
    'controllers' => [
        'factories' => [
            Controller\ProductsController::class => function(ContainerInterface $container) {
                return new Controller\ProductsController($container);
            },
        ],
    ],
    'router' => [
        'routes' => [
            'products' => [
                'type' => Literal::class,
                'options' => [
                    'route' => '/products',
                    'defaults' => [
                        'controller' => Controller\ProductsController::class,
                        'action' => 'index',
                    ],
                ],
            ],
        ],
    ],
    'service_manager' => [
        'factories' => [
            Model\Products::class => function(ContainerInterface $container) {
                return new Model\Products($container);
            },
        ]
    ],
    'view_manager' => [
        'template_path_stack' => [
            'products' => __DIR__ . '/../view',
        ],
    ],
];
