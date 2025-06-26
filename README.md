<h1 align="center">PHP Package Boilerplate</h1>

[![Packagist](https://img.shields.io/packagist/v/tomkyle/boilerplate-php.svg?style=flat)](https://packagist.org/packages/tomkyle/boilerplate-php )
[![PHP version](https://img.shields.io/packagist/php-v/tomkyle/boilerplate-php.svg)](https://packagist.org/packages/tomkyle/boilerplate-php )
[![PHP Composer](https://github.com/tomkyle/boilerplate-php/actions/workflows/php.yml/badge.svg)](https://github.com/tomkyle/boilerplate-php/actions/workflows/php.yml)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg)](LICENSE)

**A template repository for PHP package.**

---

## Start new project

```bash
$ composer create-project tomkyle/boilerplate-php new-project  
$ cd new-project
$ composer install
$ npm install
```

### Initial setup

On first install, the `composer install` command will create two things:

#### 1. Pre-commit hook
The _pre-commit_ hook runs the following checks before allowing any `git commit`:

- [PHPUnit](https://phpunit.de/documentation.html) tests
- [PHPStan](https://phpstan.org/) static analysis
- [Rector](https://getrector.com/) to fix code style issues
- [PHP CS Fixer](https://cs.symfony.com/) to format the code	

#### 2. Local PHP-CS-Fixer configuration
While the `.php-cs-fixer.dist.php` in the repo basically sets **@PER-CS** as coding standard, the local `.php-cs-fixer.php` override sets the sophisticated **@PhpCsFixer** coding standard. Its opinionated rules are compatible with PER-CS. This setup matches _my_ taste but leaves room for customization.



---

## Requirements and suggestions

| PSR standard                        | require                                                      | suggest                                                      |
| ----------------------------------- | ------------------------------------------------------------ | ------------------------------------------------------------ |
| PSR-3 Logger implementation         | [psr/log](https://packagist.org/packages/psr/log)            | [Monolog Logger](https://github.com/Seldaek/monolog)         |
| PSR-6 Cache Implementation          | [psr/cache](https://packagist.org/packages/psr/cache)        | [Symfony Cache component](https://symfony.com/components/Cache) |
| PSR-17 HTTP factory* implementation | [psr/http-factory](https://packagist.org/packages/psr/http-factory) | [nyholm/psr7](nyholm/psr7)                                   |
| PSR-18 HTTP client                  | [psr/http-client](https://packagist.org/packages/psr/http-client) | [Guzzle 7](https://packagist.org/packages/guzzlehttp/guzzle) |


```bash
$ composer require monolog/monolog
$ composer require symfony/cache
$ composer require nyholm/psr7
$ composer require guzzlehttp/guzzle
```



---

## Development


### Watch PHP source code

Run `npm update` and watch the file system for PHP code changes. See [package.json](package.json) for a list of all watch and test tasks.

```bash
$ nmp run watch
```

Whenever a PHP file is changed, the following tasks are run:

- [PHPUnit](https://phpunit.de/documentation.html) test — only for [that very file](https://github.com/tomkyle/find-run-test)
- [PHPStan](https://phpstan.org/) static analysis
- [Rector](https://getrector.com/) to fix code style issues


### Available npm scripts:

```bash
$ nmp run
```

**watch**
    npm-run-all -p watch:*

**phpstan** runs PHPStan.
    ./vendor/bin/phpstan --no-progress analyse

**phpcs** runs PHP CS Fixer as a dry run, use `phpcs:apply` to actually apply changes.

**rector**  runs Rector as a dry run, use `rector:apply` to actually apply changes.

**phpunit** runs PHPUnit tests with textdox and coverage report if available.
