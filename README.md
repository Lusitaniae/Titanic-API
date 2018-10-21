# Titanic Passenger API

The Titanic Passenger API is a simple RESTful API built on PHP Lumen.

It provides a simple CRUD interface to interact with the imported passenger data.


## Docker

Bootstrap the Titanic Passenger API using docker-compose:

Build the containers

`docker-compose up --build -d`

Use default config file

`docker-compose exec app cp .env.example .env`

Run database migrations

`docker-compose exec app php artisan migrate --seed`

Run integration tests

`docker-compose exec app vendor/bin/phpunit`
