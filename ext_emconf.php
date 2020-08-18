<?php

/**
 * Extension Manager/Repository config file for ext "dm_schema".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Dm Schema',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-10.4.99',
            'fluid_styled_content' => '9.5.0-10.4.99',
            'schema'=> '~1.7',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'DieMedialen\\DmSchema\\' => 'Classes',
        ],
    ],
    'state' => 'beta',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Daniel Hasselberg',
    'author_email' => 'dm_schema@diemedialen.de',
    'author_company' => 'Die Medialen GmbH',
    'version' => '0.10.0',
];
