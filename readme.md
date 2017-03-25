<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

## About Blog
This is a Blog CMS Application with CRUD (create, read, update, delete) feature. This application uses [Laravel](https://laravel.com/) framework.

##Usage
-Requires [Laravel](https://laravel.com/) framework
-Add admin using tinker:
>php artisan tinker
>$user = new User;
$user->username = 'admin';
$user->name = 'admin';
$user->password = Hash::make('password');
$user->save();


