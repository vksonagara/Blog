## About Laravel-Blog
This is a Blog CMS Application with CRUD (create, read, update, delete) feature. This application uses [Laravel](https://laravel.com/) framework.

## Features
- Good Blog Theme
- Create Admin user and also other users.
- Create, Read, Update and Delete posts
- CKeditor for post creation

## Usage
- Requires [Laravel 5](https://laravel.com/) framework.
- Add database configuration: go to .env file and change DB_DATABASE, DB_USERNAME, DB_PASSWORD.
- Add tables to database:
	1. Add Automatically (run following command in terminal in blog/(project root) folder):
		```php
		php artisan migrate
		```
	2. Add manually: go to database/migrations/ and check table and columns and add manually to your database.
- Add admin using tinker (run following command in terminal in blog/(project root) folder):
	```php
	php artisan tinker
	$user = new User;
	$user->name = 'admin';
	$user->email = 'your email'
	$user->password = bcrypt('password');
	$user->save();
	```
- Run Server (run following command in terminal in blog/(project root) folder):
	```php 
	php arisan serve
	```
- Open [127.0.0.1:8000](http://127.0.0.1:8000) in browser.


