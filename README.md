# Artisan Serve

Simple Laravel 5 replacement command for `php artisan serve`.

## Installation

First, install the package via composer:

```
composer require valorin/artisan-serve
```

Second, update the `providers` array in `config/app.php`:

```
'providers' => [
   ...
   'Valorin\ArtisanServe\ServeServiceProvider',
],
```

Third, run the command via composer:

```
php artisan serve
```
