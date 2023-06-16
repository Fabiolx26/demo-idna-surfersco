## About
Demo project of a Single Page Application. This readme is only a formality.

## Frameworks
* Laravel 10
* Vue 3

## How to run it
(This section is only a formality)
* Open the project directory on your terminal and run these commands:
* Check the .env database settings

```sh
composer install
php artisan migrate #Before running that, check the DB_PORT in the .env if needed
php artisan serve
```

* On another terminal session, run these commands:
```sh
npm install
npm run dev
```

* If there are no problems or errors, open 'localhost:8000' on your browser.
