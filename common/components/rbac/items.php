<?php
return [
    'user' => [
        'type' => 2,
    ],
    'site' => [
        'type' => 2,
    ],
    'member' => [
        'type' => 1,
        'ruleName' => 'userRole',
    ],
    'author' => [
        'type' => 1,
        'ruleName' => 'userRole',
        'children' => [
            'member',
        ],
    ],
    'admin' => [
        'type' => 1,
        'ruleName' => 'userRole',
        'children' => [
            'author',
            'site',
        ],
    ],
    'root' => [
        'type' => 1,
        'ruleName' => 'userRole',
        'children' => [
            'admin',
            'user',
        ],
    ],
];
