<?php

return [

    "target_php_version" => '8.2.4',

    'directory_list' => [
        'src',
        'vendor/symfony/console',
        'vendor/symfony/dow-crawler',
        'vendor/guzzlehttp/guzzle',
        'vendor/prs/http-message'
    ],

    "exclude_analysis_directory_list" => [
        'vendor/'
    ],

    'plugins' => [
        'AlwaysReturnPlugin',
        'DollarDollarPlugin',
        'DuplicateArrayKeyPlugin',
        'DuplicateExpressionPlugin',
        'PregRegexCheckerPlugin',
        'PrintfCheckerPlugin',
        'SleepCheckerPlugin',
        'UnreachableCodePlugin',
        'UseReturnValuePlugin',
        'EmptyStatementListPlugin',
        'LoopVariableReusePlugin',
    ],
];