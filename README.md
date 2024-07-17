<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<h1 align="center">Demo Web Car and Driving</h1>

The aim of this task is to pull car reviews from Car And Driving (https://www.caranddriving.com/) Web Services.

## Requirement

```
Laravel: 11
PHP >= 8.2     
Database: Mysql
Bootstrap: 5.3
Jquery
```

## Installation

- Clone this repository. Then, cd to folder of source.
- Install PHP packages

    ```
    composer install
    ```
- Copy file .env.example to config environment in .env
    ```
    cp .env.example .env
    ```
- Generate key in configuration file
    ```
    php artisan key:generate
    ```
- Install Node packages and build CSS, JS
  ```
  npm install
  npm run dev
  npm run prod
  ```
  Finally, Run command line below and open browser on [http://127.0.0.1:8000]
  ```
  php artisan server
  ```
  
## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.