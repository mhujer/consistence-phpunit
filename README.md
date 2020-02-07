# Consistence PHPUnit adds Assert for Enums from consistence/consistence 
 
[![Build Status](https://travis-ci.org/mhujer/consistence-phpunit.svg?branch=master)](https://travis-ci.org/mhujer/consistence-phpunit)  [![Latest Stable Version](https://poser.pugx.org/mhujer/consistence-phpunit/version.png)](https://packagist.org/packages/mhujer/consistence-phpunit) [![Total Downloads](https://poser.pugx.org/mhujer/consistence-phpunit/downloads.png)](https://packagist.org/packages/mhujer/consistence-phpunit) [![License](https://poser.pugx.org/mhujer/consistence-phpunit/license.svg)](https://packagist.org/packages/mhujer/consistence-phpunit) [![Coverage Status](https://coveralls.io/repos/mhujer/consistence-phpunit/badge.svg?branch=master)](https://coveralls.io/r/mhujer/consistence-phpunit?branch=master)

This library provides `EnumAssert` PHPUnit assert for [consistence/consistence](https://github.com/consistence/consistence) enums.


# Installation

```console
$ composer require --dev mhujer/consistence-phpunit
```

# Usage

1. `use \Mhujer\ConsistencePhpunit\EnumAssert;`

2. use the assert this way:
```php
EnumAssert::assertSame($expectedEnum, $actualEnum);
```

e.g.
```php
public function testEnumsAreSame(): void
{
    EnumAssert::assertSame(CardColor::get(CardColor::RED), CardColor::get(CardColor::BLACK));

    // Expected "Mhujer\ConsistencePhpunit\Fixtures\CardColor:red", but got "Mhujer\ConsistencePhpunit\Fixtures\CardColor:black
}
```

# Requirements
Works with PHP 7.3 or higher and PHPUnit 8.4 or higher.


# Submitting bugs and feature requests
Bugs and feature request are tracked on [GitHub](https://github.com/mhujer/consistence-phpunit/issues)


# Author
[Martin Hujer](https://www.martinhujer.cz) 


# Changelog

## 1.1.0 (2020-02-07)
- allow PHPUnit 9

## 1.0.0 (2019-11-24)
- initial release
