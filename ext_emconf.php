<?php
$EM_CONF[$_EXTKEY] = array(
    'title' => 'Notification of FE Login',
    'description' => 'This plugin servers to give notification to via email when an FE user logs in',
    'category' => 'plugin',
    'author' => 'Cameron Llewellyn',
    'author_email' => 'cameron.llewellyn@cnetokc.com',
    'state' => 'alpha',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'version' => '0.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '6.2.0 - 7.9.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
);