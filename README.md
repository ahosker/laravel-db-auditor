# Laravel DB Auditor

![Packagist License](https://img.shields.io/packagist/l/vcian/laravel-db-auditor?style=for-the-badge)
[![Total Downloads](https://img.shields.io/packagist/dt/vcian/laravel-db-auditor?style=for-the-badge)](https://packagist.org/packages/vcian/laravel-db-auditor)

## Introduction

This package provides to audit process of reviewing and evaluating a mysql database system.
DB Auditor scan your mysql database and give insights of mysql standards, constraints and provide option to add the constraints through CLI.
The result of audit process shows list of tables & columns which doesn't have proper standards.

## Installation & Usage

> **Requires [PHP 8.0+](https://php.net/releases/) | [Laravel 8.0+](https://laravel.com/docs/8.x)**

Require Laravel DB Auditor  using [Composer](https://getcomposer.org):

```bash
composer require vcian/laravel-db-auditor
```
## Usage:

You can access DB Auditor using below artisan commands.

> #### **php artisan db:audit**
> 
> This command give you result with list of table with standard follow indication.
> 
> You can also see table specific column name which doesn't have standard followed.

> #### **php artisan db:standard**
> 
> This command gives you result with list of tables with primary,foreign,unique,index constrain.
> 
> You can add more constrain to the table by seeing existing constrain with table.



**Note:**

You have to set your database name with _DB_DATABASE_ paramter in you laravel .env file to use this feature.

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security-related issues, please email ruchit.patel@viitor.cloud instead of using the issue tracker.

## Credits

- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.