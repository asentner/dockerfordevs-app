<?php
return [
    'dependencies' => [
        'factories' => [
            'Zend\Expressive\FinalHandler' =>
                Zend\Expressive\Container\TemplatedErrorHandlerFactory::class,
            Zend\Expressive\Template\TemplateRendererInterface::class =>
                Zend\Expressive\Plates\PlatesRendererFactory::class,
        ],
    ],
    'templates' => [
        'extension' => 'phtml',
        'paths' => [
            'error'  => ['templates/error'],
            'layout'  => ['templates/layout'],
        ]
    ]
];
