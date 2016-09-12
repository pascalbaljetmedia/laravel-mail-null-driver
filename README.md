# Laravel Mail Null Driver [WIP!]

[![Latest Version on Packagist](https://img.shields.io/packagist/v/pbmedia/laravel-mail-null-driver.svg?style=flat-square)](https://packagist.org/packages/pbmedia/laravel-mail-null-driver)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/pascalbaljetmedia/laravel-mail-null-driver/master.svg?style=flat-square)](https://travis-ci.org/pascalbaljetmedia/laravel-mail-null-driver)
[![Quality Score](https://img.shields.io/scrutinizer/g/pascalbaljetmedia/laravel-mail-null-driver.svg?style=flat-square)](https://scrutinizer-ci.com/g/pascalbaljetmedia/laravel-mail-null-driver)
[![Total Downloads](https://img.shields.io/packagist/dt/pbmedia/laravel-mail-null-driver.svg?style=flat-square)](https://packagist.org/packages/pbmedia/laravel-mail-null-driver)

This package provides a 'null' mail driver for Laravel 5.1 and higher.

## Installation

You can install the package via composer:

``` bash
composer require pbmedia/laravel-mail-null-driver
```

Add the service provider and facade to your ```app.php``` config file:

``` php

// Laravel 5: config/app.php

'providers' => [
    ...
    Pbmedia\MailNullDriver\MailNullDriverServiceProvider::class,
    ...
];

```

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email pascal@pascalbaljetmedia.com instead of using the issue tracker.

## Credits

- [Pascal Baljet](https://github.com/pascalbaljet)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
