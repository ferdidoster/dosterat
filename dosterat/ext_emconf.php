<?php

/**
 * Extension Manager/Repository config file for ext "dosterat".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Doster.at',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
            'fluid_styled_content' => '11.5.0-11.5.99',
            'rte_ckeditor' => '11.5.0-11.5.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'DosterAt\\Dosterat\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'ferdinand doster',
    'author_email' => 'ferdiedoster@gmail.com',
    'author_company' => 'Doster at',
    'version' => '1.0.0',
];
