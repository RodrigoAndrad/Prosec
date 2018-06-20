<?php

return [
    'role_structure' => [
        'desenvolvedor' => [
            'users' => 'c,r,u,d',
            'acl' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'administrador' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'editor' => [
            'profile' => 'r,u'
        ],
        'autor' => [
            'profile' => 'r,u'
        ],
        'parceiro' => [
            'profile' => 'r,u'
        ],
        'cliente' => [
            'profile' => 'c,r,u,d'
        ],
        'visitante' => [
            'profile' => 'r'
        ],

    ],
    'permission_structure' => [],
    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
