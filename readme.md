<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

## About Blog
This is a Blog CMS Application with CRUD (create, read, update, delete) feature. This application uses [Laravel](https://laravel.com/) framework.

## Usage
- Requires [Laravel 5](https://laravel.com/) framework
- Add database configuration: go to .env file and change DB_DATABASE, DB_USERNAME, DB_PASSWORD.
- Add admin using tinker:
	```php
	php artisan tinker
	$user = new User;
	$user->username = 'admin';
	$user->name = 'admin';
	$user->password = bcrypt('password');
	$user->save();
	```
- Hello


