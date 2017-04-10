<?php

namespace ZFT;

use Zend\Router\Http\Literal;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'controllers' => [
        'factories' => [
            Controller\ZFTController::class => InvokableFactory::class,
        ],
    ],
    'routine' => [
        'routes' => [
            'zft' => [
                'type'    => Literal::class,
                'options' => [
                    'route' => '/zft',
                    'defaults' => [
                        'controller' => Controller\ZFTController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            'zft' => __DIR__ . '/../view',
        ],
    ],
];