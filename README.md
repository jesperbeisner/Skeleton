# Skeleton

## About

Skeleton application for future projects. The setup includes Symfony 6 with Doctrine, mysql, nginx and php docker containers, phpstan, phpunit and a GitHub workflow.

## Local Setup

### Start Docker Containers
```shell
docker-compose up -d
```

### Load Migrations
```shell
php bin/console doctrine:migrations:migrate
```

### Load Fixtures
```shell
php bin/console doctrine:fixtures:load
```

### Visit In Browser
```
http://localhost:8080
```

## Reset Database

### Drop Database
```shell
php bin/console doctrine:database:drop --force
```

### Create Database
```shell
php bin/console doctrine:database:create
```

### Load Migrations
```shell
php bin/console doctrine:migrations:migrate --no-interaction
```

### Load Fixtures
```shell
php bin/console doctrine:fixtures:load
```