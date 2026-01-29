<?php

$EM_CONF[$_EXTKEY] = [
    'title' => '[AASHRO] Chocolux TYPO3 Template',
    'description' => 'A premium chocolate-themed website design with an elegant, modern, and responsive layout.',
    'category' => 'plugin',
    'author' => 'Team AASHRO',
    'author_email' => 'info@aashro.com',
    'author_company' => 'AASHRO Tech',
    'state' => 'stable',
    'uploadfolder' => false,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '13.0.0-13.9.9',
            'mask' => '9.0.0-9.0.9',
            'at_instagram' => '1.0.0'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
