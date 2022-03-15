# UUID

[![Latest Stable Version](http://poser.pugx.org/abmmhasan/uuid/v)](https://packagist.org/packages/abmmhasan/uuid) [![Total Downloads](http://poser.pugx.org/abmmhasan/uuid/downloads)](https://packagist.org/packages/abmmhasan/uuid) [![Latest Unstable Version](http://poser.pugx.org/abmmhasan/uuid/v/unstable)](https://packagist.org/packages/abmmhasan/uuid) [![License](http://poser.pugx.org/abmmhasan/uuid/license)](https://packagist.org/packages/abmmhasan/uuid) [![PHP Version Require](http://poser.pugx.org/abmmhasan/uuid/require/php)](https://packagist.org/packages/abmmhasan/uuid)


UUID (v1, v3-v5) Generator (RFC4122)


## Prerequisites

Language: PHP 7.1/+

## Installation

```
composer require abmmhasan/uuid
```

## Usage

### v1

```php
/**
* Get v1 UUID (Time based)
*/
\AbmmHasan\Uuid::v1();

/**
* Get generated node, for further use
*/
$node = \AbmmHasan\Uuid::getNode();

/**
* Pass your pre-generated node (for node specific UUID)
*/
\AbmmHasan\Uuid::v1($node);
```

### v3

```php
/**
* Get v3 UUID for 'TestString' (default X500 namespace)
*/
\AbmmHasan\Uuid::v3('TestString');

/**
* Get v3 UUID for an URL & pre-defined namespace
* You can pass X500, URL, OID, DNS (check RFC4122 #Appendix C)
*/
\AbmmHasan\Uuid::v3('abmmhasan.github.io','url');

/**
* You can generate a random UUID & use as namespace as well
*/
\AbmmHasan\Uuid::v3('abmmhasan.github.io','fa1700dd-828c-4d1b-8e6d-a6104807da90');
```

### v4

```php
/**
* Get v4 UUID (completely random)
*/
\AbmmHasan\Uuid::v4();
```

### v5

```php
/**
* Get v5 UUID for 'TestString' (default X500 namespace)
*/
\AbmmHasan\Uuid::v5('TestString');

/**
* Get v5 UUID for an URL & pre-defined namespace
* You can pass X500, URL, OID, DNS (check RFC4122 #Appendix C)
*/
\AbmmHasan\Uuid::v5('abmmhasan.github.io','url');

/**
* You can generate a random UUID & use as namespace as well
*/
\AbmmHasan\Uuid::v5('abmmhasan.github.io','fa1700dd-828c-4d1b-8e6d-a6104807da90');
```

### v2

```php
/** 
* Not supported! 
*/
```

## Support

Having trouble? Create an issue!
