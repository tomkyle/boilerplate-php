<?php

/**
 * Local override for PHP-CS-Fixer configuration.
 *
 * This file should be .gitignored.
 */

$phpCsFixerConfig = require __DIR__.'/.php-cs-fixer.dist.php';

$cacheDir = is_dir(__DIR__.'/tests') ? __DIR__.'/tests/caches' : __DIR__;
$rules = $phpCsFixerConfig->getRules();

return $phpCsFixerConfig
    ->setCacheFile($cacheDir.'/.php-cs-fixer.cache')
    ->setRules(array_merge($rules, [
        '@PhpCsFixer' => true,
        'php_unit_attributes' => true,
        'php_unit_test_class_requires_covers' => false,
        'php_unit_internal_class' => false,
    ]));
