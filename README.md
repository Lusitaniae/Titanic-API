# Titanic Passenger API

The Titanic Passenger API is a simple RESTful API built on PHP Lumen.

It provides a simple CRUD interface to interact with the imported passenger data.

## API

Display welcome page

`curl localhost:8080/api/v1/`

Display all passengers

`curl localhost:8080/api/v1/passengers`

Display passenger id 3

`curl localhost:8080/api/v1/passenger/3`

Create a new passenger

```
curl --header "Content-Type: application/json" \
  --request POST \
  --data '{"survived":0,"pclass":"3","name":"Dummy","sex":"male","age":12,"siblings_spouses_aboard":1,"parents_children_aboard":0,"fare":7.25}' \
  localhost:8080/api/v1/passenger
```

Update an existing passenger (id 6)

```
curl --header "Content-Type: application/json" \
  --request PUT \
  --data '{"survived":0,"pclass":"3","name":"Dummy","sex":"male","age":12,"siblings_spouses_aboard":1,"parents_children_aboard":0,"fare":7.25}' \
  localhost:8080/api/v1/passenger/6
```

Delete a passenger (id 890)

```
curl --header "Content-Type: application/json" \
  --request DELETE \
  localhost:8080/api/v1/passenger/890
```

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
