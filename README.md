## The 10X developer boilerplate | PHP | Laravel

This repository is a "template" repository, and is intended to be used to create a new repo.

It contains the basic packages that are required in all projects (almost all), and can be changed as per the requirements of the project.

## Basic requirements for setup
- Git :  [Install git](https://git-scm.com/book/en/v2/Getting-Started-Installing-Git)
  - To clone the repo created using this template repo (or even the boilerplate) 
- Docker : [Install docker](https://docs.docker.com/engine/install)
- Docker Compose : [Install docker-compose](https://docs.docker.com/compose/install)

## Using the template to create a new repo

 - Click the button on the top that says "Use this template" and on the following page enter the repository name.
 - The sample name that we would use is `saw-api` short for `Super Awesome Website - API`
 - The URL of the repo would now be : `https://github.com/your-username/saw-api.git` 

## Clone and setup the project

#### Get the code (clone the repo)

```
git clone git@github.com:your-username/saw-api.git
```


#### Enter the folder :
```
cd saw-api
```

#### Update service names
_To avoid conflicts with other projects using the same template:_

Update the service and container names (and IP addresses, in network sections) from `xdev-api` to `saw-api` and from `xdev-pg` to `saw-pg` (wherever applicable) in following files: 
 - `docker-compose.yml` : For locally running containers
 - `composer.json` : For performing pre-commit/pre-push hooks using `docker-compose exec`, during local development and for CI tools
 - `.circleci/config.yml` : For using the same behaviour as local development when running all validations/testing using `composer install`
 - `.github/workflows/CoQa.yml` : For using the same behaviour as local development when running all validations/testing using `composer install`

Tip: One simple method of using non-repeatable IPs (almost, non-repeatable) is to use the date format for first 2 octets like YYM.MDD.1.1, which could translate to (considering the date as January 13, 2022) : 220.113.1.1
#### Make the docker-compose build and bring up the services, in the background

```
docker-compose up --build -d
```

#### Install the boilerplate

- Install composer dependencies
```
docker-compose exec saw-api composer install
```

#### The landing page URL should be working now
```
http://220.108.1.1
```


The dependencies and packages (some of these are mentioned in `composer.json`) are included in the Dockerfile, and are listed below:

### Dependencies:
 - PHP 8.1
 - JSON extension
 - mbstring extension
 - openssl extension
 - PDO extension (for Postgres and Sqlite)

### Packages:
 - fruitcake/laravel-cors : ^2.0
 - guzzlehttp/guzzle : ^7.0.1
 - laravel/framework : ^8.54
 - laravel/sanctum : ^2.11
 - laravel/telescope : ^4.6
 - laravel/tinker : ^2.5
 - sentry/sentry-laravel : ^2.9"


## Core technologies for development
- Language: PHP
- Framework: Laravel
- Database: PostgreSql



### Breakdown of the `docker-compose.yml` file
 - Version: 3
 - Services:
   - xdev-api
     - Uses the commands mentioned in Dockerfile to build the docker image
     - Uses the same name for container `xdev-api`
     - Requires the DB service (`xdev-pg`) to be up and running
     - The current directory (".") is mapped to the webroot of container, to keep files in sync (file-permissions still might need to be managed manually)
     - Restart the container, so that `docker-compose up` will reflect the changes made in `docker-compose.yml`, and additionally it also ensures that the services are started with the system/daemon start-up (basically, auto-start docker service with system boot-up)
     - Some environment variables are setup already
       - APP_NAME: `'The 10X developer boilerplate'`
       - APP_ENV: `'local'`
       - APP_DEBUG: `'true'`
       - APP_URL: `'http://220.108.1.1'`
       - DB_CONNECTION: `'pgsql'`
     - IP address is mentioned (belonging to a specific network)
   - xdev-pg
     - Uses the latest postgres image (from Docker hub)
     - There are 2 environment variables 
       - Root password, as `docker`
       - Create secondary DB as `test_db` for PhpUnit test cases
     - Uses the same name for container `xdev-pg`
     - The container's data storage folder is mapped to a volume in host machine; this ensures DB is not deleted when the container is removed
     - IP address is mentioned (belonging to a specific network)
 - Volume: Creates a volume on host machine, and is used by `xdev-pg` service to store DB data
 - Network : Network specific details (primarily the subnet IP range)

### Features of boilerplate

Below are the features of boilerplate compared to the [default laravel app](https://github.com/laravel/laravel)

- setup Docker
  - setup 2 containers
  - web container: apache with PHP 8
  - DB container: postgres latest version (at the time of writing it is postgres version 14)

- [setup Heroku with Procfile](https://devcenter.heroku.com/articles/procfile#procfile-format)
  - runs DB migrations
  - defines 2 process types: web and worker
  - web: apache server
  - worker: starts laravel queue worker if there's a worker dyno on heroku

- [Git hooks](https://github.com/BrainMaestro/composer-git-hooks)
  - Pre-commit hook
    - [security checker](https://github.com/enlightn/security-checker)
    - [phpcs, phpcbf](https://github.com/squizlabs/PHP_CodeSniffer)
    - [phpmd](https://github.com/phpmd/phpmd)
    - [parallel-lint](https://github.com/php-parallel-lint/PHP-Parallel-Lint)

  - Pre-push hook
    - [phpunit](https://laravel.com/docs/8.x/testing)

- [setup Telescope](https://laravel.com/docs/8.x/telescope)
  - By default, Telescope is enabled on all environments
  - To disable on particular environment, we can set env variable `TELESCOPE_ENABLED = false`
  - TELESCOPE is disabled during `testing`, and can be changed in `phpunit.xml`

- [setup Laravel-IDE helper](https://github.com/barryvdh/laravel-ide-helper)
  - For VSCode, an extra extension is required for auto-completion to work - [PHP Intelephense](https://marketplace.visualstudio.com/items?itemName=bmewburn.vscode-intelephense-client)

- [setup sentry](https://docs.sentry.io/platforms/php/guides/laravel/)
  - Set env variable `SENTRY_DSN`
