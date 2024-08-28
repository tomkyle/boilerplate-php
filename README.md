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

Run `npm update` and watch the file system for PHP code changes. See [package.json](package.json) for a list of all watch and test tasks.

```bash
$ nmp run watch
```





