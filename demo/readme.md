1. download 'XAMPP'. The XAMPP contains Apache + MySQL + PHP. So you don't have to download 
and install Apache, database and php manually. 
2 put the 'demo' folder(this folder) into the directory of "\xmapp\htdocs". The the direcory -'\xmapp'
is where you installed 'XAMPP'. Ater this, you have the directory of "\xmapp\htdocs\demo".
3 I suggest you to use the editor "Bracket".
It has many nice figures: 
	It focus on websites development. 
	You can open a whole folder and see the tree structure of the project.
4 open you XAMPP, you'll see the XAMPP Control pannel 
5 in the row of Apache, click on 'start', your apache will work.
  in the row of MySQL, click on 'start', your MySQL database will work.
6 in the row of MySQL, click on 'admin', opens the administrator webpage. In the left above corner,
click on 'New' to create a new database. Give the name 'laravel5_0_15' to the database. ( You can 
give other names to the database if you are familiar with the process later)
7 return 

1. create databse and change database setting
2. in cmd run 'php artisan fresh'
3 'php artisan migrate' and 'php artisan seed'
4  removing the ./vendor/compiled.php file and running 'composer update'
5  in config/app.php, change 'debug' => env('APP_DEBUG=true'), to 'debug' => true;
6  php artisan key:generate
## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/downloads.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
