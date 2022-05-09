# Skeleton

## About

Skeleton application for future projects.

The setup includes Symfony 6, Doctrine, mysql, nginx and php docker containers, phpstan, phpunit and a GitHub workflow.

## Local Setup

### Start Docker Containers
```shell
docker-compose up -d
```

### Load Migrations
```shell
docker exec -it skeleton-php-container php bin/console doctrine:migrations:migrate --no-interaction
```

### Load Fixtures
```shell
docker exec -it skeleton-php-container php bin/console doctrine:fixtures:load --no-interaction
```

### Visit In Browser
```
http://localhost:8080
```

## Reset Database

### Drop Database
```shell
docker exec -it skeleton-php-container php bin/console doctrine:database:drop --force
```

### Create Database
```shell
docker exec -it skeleton-php-container php bin/console doctrine:database:create
```

### Load Migrations
```shell
docker exec -it skeleton-php-container php bin/console doctrine:migrations:migrate --no-interaction
```

### Load Fixtures
```shell
docker exec -it skeleton-php-container php bin/console doctrine:fixtures:load --no-interaction
```

## Production Setup

### Edit Env Variables
```shell
nano .env.local
>> APP_ENV=prod
>> DATABASE_URL="mysql://[USERNAME]:[PASSWORD]@[REAL_SERVER_IP]:3306/main?serverVersion=8.0&charset=utf8mb4"
```

### Composer
```shell
composer install --no-dev --optimize-autoloader --no-interaction
```

### Load Migrations
```shell
php bin/console doctrine:migrations:migrate --no-interaction
```

### Clear Cache
```shell
php bin/console cache:clear
```

### Docker
```shell
docker-compose up -d web php
```