# Operator Indonesia Laravel Package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/deogw/operator-indonesia.svg?style=flat-square)](https://packagist.org/packages/deogw/operator-indonesia)
[![Build Status](https://img.shields.io/travis/deogw/operator-indonesia/master.svg?style=flat-square)](https://travis-ci.org/deogw/operator-indonesia)
[![Quality Score](https://img.shields.io/scrutinizer/g/deogw/operator-indonesia.svg?style=flat-square)](https://scrutinizer-ci.com/g/deogw/operator-indonesia)
[![Total Downloads](https://img.shields.io/packagist/dt/deogw/operator-indonesia.svg?style=flat-square)](https://packagist.org/packages/deogw/operator-indonesia)

Package Laravel yang berfungsi untuk mengecek operator atau provider berdasarkan prefix nomor telepon.

## Installasi

Install via Composer :

```bash
composer require deogw/operator-indonesia
```

Register Service Provider & Facade (Untuk Laravel < 5.5) :

Khusus versi Laravel < 5.5 karena belum support fitur auto discover, maka harus mendaftarkan Service Provider dan Facade secara manual.

Tambahkan Service Provider dan Facade pada `config.app`

``` php
'providers' => [

    Deogw\OperatorIndonesia\OperatorIndonesiaServiceProvider::class

]
```

``` php
'aliases' => [

    'OperatorIndonesia' => Deogw\OperatorIndonesia\OperatorIndonesiaFacade::class

]
```

## Penggunaan

``` php
use OperatorIndonesia;

OperatorIndonesia::check('0822123456');

/*
when input number (string) matches with prefix, it returns provider / operator name.
Example result:
(String) 'Telkomsel'

If not, it returns :
(String) 'Unknown'
*/
```

### Testing

``` bash
composer test 
or 
phpunit
```

## Credits

- [Deo Wibawa](https://github.com/deogw)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
