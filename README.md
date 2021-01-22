# PHP Package Boilerplate

**Start Project:**

```php
$ composer create-project tomkyle/boilerplate-php new-project  
```



## Installation


```bash
$ composer require vendor/package:^1.0
```

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


