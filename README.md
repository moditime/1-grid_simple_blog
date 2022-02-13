<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Short description of the project 
This application is a simple blog that is build on Laravel 8 

## Requirements to run the Blog Application 
To create a Laravel application you will need a few tools installed in your computer.

PHP >= 7.3.
Database (MySql).
A localhost Web Server (XAMPP or WAMP)
git bash 

## How to run the application 

## Setting up the local Server: 

To run the application locally, you will need xampp or wamp- this is local server installed (in this application we used XAMPP)
Open the xampp control panel and run Apache and Mysql
Open php my admin on : http://localhost/phpmyadmin
Create new database called : blog

## Cloning the application from remote server to your local machine:
Navigate to your destination directory using git bash and do the following

clone https://github.com/moditime/1-grid_simple_blog.git
cmd into  the root directory of the app and run the following command : 


## To create all the  tables on your database run the following: 
php artisan migrate

## When everything is configured correctly run the following : 

php artisan serve

it will expose the app to this url : C:\xampp\htdocs\blog>php artisan serve
Starting Laravel development server: http://127.0.0.1:8000

## To run the unit test 
php artisan test
