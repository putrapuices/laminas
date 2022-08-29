<?php

/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

return [
    // 'db' => [
    //     'driver' => 'Pdo_Mysql',
    //     'dsn' => 'mysql:dbname=laminas;host=localhost',
    //     'username' => 'root',
    //     'password' => '',
    // ]
    'db' => [
        'driver' => 'Pdo',
        'dsn'    => 'mysql:dbname=laminastutorial;host=localhost;charset=utf8',
        'username' => 'root',
        'password' => '',
    ],
    // 'db' => [
    //     'driver' => 'Pdo',
    //     'dsn'    => sprintf('sqlite:%s/data/laminastutorial.db', realpath(getcwd())),
    // ],
    'translator' => [
        'locale' => 'en_US',
        'translation_file_patterns' => [
            [
                'type'     => 'gettext',
                'base_dir' => getcwd() .  '/data/language',
                'pattern'  => '%s.mo',
            ],
        ],
    ],
];
