<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<h1 align="center">Demo Web Car and Driving</h1>

The aim of this task is to pull car reviews from Car And Driving (https://www.caranddriving.com/) Web Services.

## Requirement

```
Laravel: 7.29
PHP: 7.2|^8.0    
Bootstrap: 5.3
Node >= 14
Database: Sqlite (default) Or MySQL,...
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
- Config Sqlite Database if need:
    ```
    DB_CONNECTION=sqlite

    DB_DATABASE=/absolute/path/to/database/database.sqlite (Absolute Path)

    DB_DATABASE=/absolute/path/to/database/database.sqlite (Windows)

    DB_DATABASE=/var/www/html/example-app/database/database.sqlite (Linux/macOS)

    touch database/database.sqlite (Create file DB)

    chmod 644 database/database.sqlite (Directory Permissions)

    php artisan migrate (Run migration)

    ```

- Clear Cached Config - Route - View:
    ```
    php artisan route:clear
    php artisan config:clear
    php artisan cache:clear
    php artisan view:cache
    ```

- Install Node packages and compile assets (CSS, JS) using [Laravel Mix](https://laravel-mix.com/docs)
  ```
  npm install
  npm run dev (or npm run prod for production)
  ```
  Finally, Run command line below and open browser at [http://127.0.0.1:8000](http://127.0.0.1:8000)
  ```
  php artisan serve
  ```
  
## Demo Tasks
1. **Pull data from Car and Driving Web Service with a JSON object response**
    [http://127.0.0.1:8000/review/91480](http://127.0.0.1:8000/review/91480)

    <img src="public/images/larave-car-demo-task-1.PNG" alt="Example Image" width="400" height="300" />

    The [SoapClient](https://www.php.net/manual/en/class.soapclient.php) class provides a client for » SOAP 1.1, » SOAP 1.2 servers. It's used in WSDL or non-WSDL mode to pull data from web service [Caranddriving](https://www.caranddriving.com/ws/A041/ws.asmx?WSDL)


2. **View the Car Review Page by sending an AJAX request to the endpoint created in Task 1**:
    [http://127.0.0.1:8000/view/91480](http://127.0.0.1:8000/view/91480)

    <img src="public/images/larave-car-demo-task-2.PNG" alt="Example Image" width="400" height="300" />

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