<?php

declare(strict_types=1);

namespace Form;

use Laminas\Router\Http\Segment;
use Laminas\ServiceManager\Factory\InvokableFactory;

return [
    'router' => [
        'routes' => [
            'form' => [
                'type'    => Segment::class, //type route
                'options' => [
                    'route'    => '/form/[:action]',
                    'defaults' => [
                        'controller' => Controller\FormElementController::class,
                        'action'     => 'index',
                    ],
                    'constraints' => [
                        'action' => '[a-zA-Z0-9]*'
                    ]
                ]
            ]
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\FormElementController::class => InvokableFactory::class,
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];
