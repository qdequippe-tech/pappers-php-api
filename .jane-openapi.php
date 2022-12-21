<?php

declare(strict_types=1);

return [
    'openapi-file' => 'https://www.pappers.fr/api_v2.yaml',
    'namespace' => 'Qdequippe\Pappers\Api',
    'directory' => __DIR__ . '/generated/',
    'strict' => false,
    'use-fixer' => true,
    'fixer-config-file' => __DIR__ . '/.php-cs-fixer.php',
];
