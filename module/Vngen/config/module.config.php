<?php

declare(strict_types=1);

namespace Vngen;

use Laminas\Router\Http\Segment;
use Laminas\ServiceManager\Factory\InvokableFactory;
use Laminas\Router\Http\Literal;

return [
    'router' => [
        'routes' => [
            'vngen' => [
                'type'    => Segment::class, //type route
                'options' => [
                    'route'    => '/vngen',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action'     => 'index',
                    ],
                    'constraints' => [
                        'action' => '[a-zA-Z]*',
                        'id' => '[0-9]*'
                    ]
                ],
                'may_terminate' => false, // route con ke thua cac khai bao cua route cha
                'child_routes' => [
                    'sub_route' => [
                        'type' => Segment::class,
                        'options' =>  [
                            'route' => '[/:action][/:id]',
                            'defaults' => [
                                'controller' => Controller\UserController::class,
                            ],
                            'constraints' => [
                                'action' => '[a-zA-Z]*',
                                'id' => '[0-9]*'
                            ]
                        ]
                    ]
                ]
                /*'child_routes' => [
                    'login' => [
                        'type' => Literal::class,
                        'options' =>  [
                            'route' => '/login',
                            'defaults' => [
                                'controller' => Controller\UserController::class,
                                'action' => 'login'
                            ],
                        ]
                    ],
                    'logout' => [
                        'type' => Literal::class,
                        'options' =>  [
                            'route' => '/logout',
                            'defaults' => [
                                'controller' => Controller\UserController::class,
                                'action' => 'logout'
                            ],
                        ]
                    ]
                ]*/
            ],
            /*'vngen' => [
                'type' => Literal::class,
                'options' =>  [
                    'route' => '/vngen/hoangloan',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action' => 'index'
                    ]
                ]
            ],
            'vngen-edit' => [
                'type' => Literal::class,
                'options' =>  [
                    'route' => '/vngen/edit',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action' => 'edit'
                    ]
                ]
            ]*/
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\IndexController::class => InvokableFactory::class,
            Controller\UserController::class => InvokableFactory::class,
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];
