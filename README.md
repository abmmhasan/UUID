# UUID

[![License: MIT](https://img.shields.io/badge/License-MIT-green.svg)](https://opensource.org/licenses/MIT)


UUID (v1, v3-v5) Generator (RFC4122)


## Prerequisites

Language: PHP 7.1/+

## Installation

```
composer require abmmhasan/uuid
```

## Usage

### v1 & v4

```php
/**
* Get v1 UUID (Time based)
*/
\AbmmHasan\Uuid::v1();

/**
* Get v4 UUID (completely random)
*/
\AbmmHasan\Uuid::v4();
```

### v3 & v5

```php
/**
* Get v3 or v5 UUID for 'TestString' (default X500 namespace)
*/
\AbmmHasan\Uuid::v3('TestString');
// or
\AbmmHasan\Uuid::v5('TestString');

/**
* Get v3 or v5 UUID for an URL & pre-defined namespace
* You can pass X500, URL, OID, DNS (check RFC4122 #Appendix C)
*/
\AbmmHasan\Uuid::v3('abmmhasan.github.io','url');
// or
\AbmmHasan\Uuid::v5('abmmhasan.github.io','url');

/**
* You can generate a random UUID & use as namespace as well
*/
\AbmmHasan\Uuid::v3('abmmhasan.github.io','fa1700dd-828c-4d1b-8e6d-a6104807da90');
// or
\AbmmHasan\Uuid::v5('abmmhasan.github.io','fa1700dd-828c-4d1b-8e6d-a6104807da90');
```

## Support

Having trouble? Create an issue!
