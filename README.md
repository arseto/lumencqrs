# CQRS Template for Laravel\Lumen

# Overview
* Implementation template for [CQRS](https://www.martinfowler.com/bliki/CQRS.html)
* Use laravel/lumen IoC container for dependency injection by default (or you can override it)

# Prerequisite
* PHP 5.6 or higher
* [composer](https://getcomposer.org)
* [Laravel](https://laravel.com) or [lumen](https://lumen.laravel.com) framework installed

# Installation
* execute `composer require arseto/lumencqrs` in your project folder
* For lumen, add this line to the `bootstrap/app.php` file
```php
$app->register(Arseto\LumenCQRS\Providers\CQRSServiceProvider::class);
```
* For laravel, add this line to 'providers' in `config/app.php`
```php
Arseto\LumenCQRS\Providers\CQRSServiceProvider::class,
```

# Usage
* This package serves as template to implement CQRS
* Simply create command-handler pair and query-reader pair then inject the CommandBus and QueryBus to your controller

