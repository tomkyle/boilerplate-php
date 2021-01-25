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

- [psr/log](https://packagist.org/packages/psr/log) *PSR-3 Logger implementation* 
- [psr/cache](https://packagist.org/packages/psr/cache) *PSR-6 Cache Implementation*
- [psr/http-factory](https://packagist.org/packages/psr/http-factory) *PSR-17 HTT factory* implementation
- [psr/http-client](https://packagist.org/packages/psr/http-client) *PSR-18 HTTP client* implementation

For PSR-3 and PSR-6, [Monolog](https://github.com/Seldaek/monolog) and the [Symfony Cache component](https://symfony.com/components/Cache) are recommended. 

For PSR-18 and PSR-17, suggestions are [Guzzle 7](https://packagist.org/packages/guzzlehttp/guzzle) via [guzzlehttp/guzzle](https://packagist.org/packages/guzzlehttp/) and Nyholm's [nyholm/psr7](nyholm/psr7) which (despite its name) provides the PSR-17 factories as well.


```bash
$ composer require nyholm/psr7
$ composer require guzzlehttp/guzzle
$ composer require monolog/monolog
$ composer require symfony/cache
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

