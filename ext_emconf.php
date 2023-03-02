<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "imagemod".
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'Extends Image manipulation in TYPO3 backend',
    'description' => '',
    'category' => 'be',
    'version' => '1.0.0',
    'state' => 'stable',
    'uploadfolder' => false,
    'createDirs' => '',
    'clearcacheonload' => false,
    'author' => 'Inscript Team',
    'author_email' => 'office@inscript.dev',
    'author_company' => 'Inscript',
    'constraints' =>
        [
            'depends' =>
                [
                    'typo3' => '10.4.0-11.5.99',
                ],
            'conflicts' =>
                [],
            'suggests' =>
                [],
        ],
];
