<h1 align="center">PHP Package Boilerplate</h1>

<p align="center"> A template repository for PHP package.</p>

---



## Create new project


Either using `composer create-project` …

```bash
$ composer create-project tomkyle/boilerplate-php new-project  
```


… or using the traditional way using `git clone`:

```bash
$ git clone git@github.com:tomkyle/boilerplate-php.git
# or
$ git clone https://github.com/tomkyle/boilerplate-php.git
```



## Requirements

This package requires a *PSR-18 HTTP client* implementation and a *PSR-17 HTT factory* implementation. Suggestions are [Guzzle 7](https://packagist.org/packages/guzzlehttp/guzzle) via [guzzlehttp/guzzle](https://packagist.org/packages/guzzlehttp/) and Nyholm's [nyholm/psr7](nyholm/psr7) which (despite its name) provides the PSR-17 factories as well:


```bash
$ composer require nyholm/psr7
$ composer require guzzlehttp/guzzle
```



## Unit tests and development

1. Copy `phpunit.xml.dist` to `phpunit.xml` 
2. Run [PhpUnit](https://phpunit.de/) like this:

```bash
$ composer test
# or
$ vendor/bin/phpunit
```

And there's more in the `scripts` section of **composer.json**.

