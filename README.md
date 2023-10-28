# UUID

![GitHub Workflow Status](https://img.shields.io/github/actions/workflow/status/abmmhasan/uuid/ci.yml?branch=main)
[![Codacy Badge](https://app.codacy.com/project/badge/Grade/b94b63f507ff4b91be4353e3a98c3fe3)](https://www.codacy.com/gh/abmmhasan/UUID/dashboard?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=abmmhasan/UUID&amp;utm_campaign=Badge_Grade)
![Libraries.io dependency status for GitHub repo](https://img.shields.io/librariesio/github/abmmhasan/uuid)
![Packagist Downloads](https://img.shields.io/packagist/dt/abmmhasan/uuid)
[![License: MIT](https://img.shields.io/badge/License-MIT-green.svg)](https://opensource.org/licenses/MIT)
![Packagist Version](https://img.shields.io/packagist/v/abmmhasan/uuid)
![Packagist PHP Version Support](https://img.shields.io/packagist/php-v/abmmhasan/uuid)
![GitHub code size in bytes](https://img.shields.io/github/languages/code-size/abmmhasan/uuid)

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
// Get v1 UUID (Time based)
\AbmmHasan\UUID\GenerateUuid::v1();

// Get generated node, for further use
$node = \AbmmHasan\UUID\GenerateUuid::getNode();

// Pass your pre-generated node (for node specific UUID)
\AbmmHasan\UUID\GenerateUuid::v1($node);

// alternatively can also use
\AbmmHasan\UUID\uuid1();
```

### v3

```php
// Get v3 UUID for 'TestString' (default X500 namespace)
\AbmmHasan\UUID\GenerateUuid::v3('TestString');

/**
* Get v3 UUID for an URL & pre-defined namespace
* You can pass X500, URL, OID, DNS (check RFC4122 #Appendix C)
*/
\AbmmHasan\UUID\GenerateUuid::v3('abmmhasan.github.io','url');

// You can generate a random UUID & use as namespace as well
\AbmmHasan\UUID\GenerateUuid::v3('abmmhasan.github.io','fa1700dd-828c-4d1b-8e6d-a6104807da90');

// alternatively can also use
\AbmmHasan\UUID\uuid3();
```

### v4

```php
// Get v4 UUID (completely random)
\AbmmHasan\UUID\GenerateUuid::v4();

// alternatively can also use
\AbmmHasan\UUID\uuid4();
```

### v5

```php
// Get v5 UUID for 'TestString' (default X500 namespace)
\AbmmHasan\UUID\GenerateUuid::v5('TestString');

/**
* Get v5 UUID for an URL & pre-defined namespace
* You can pass X500, URL, OID, DNS (check RFC4122 #Appendix C)
*/
\AbmmHasan\UUID\GenerateUuid::v5('abmmhasan.github.io','url');

// You can generate a random UUID & use as namespace as well
\AbmmHasan\UUID\GenerateUuid::v5('abmmhasan.github.io','fa1700dd-828c-4d1b-8e6d-a6104807da90');

// alternatively can also use
\AbmmHasan\UUID\uuid5();
```

### v2

```php
/** 
* Not supported! 
*/
```

## Support

Having trouble? Create an issue!
