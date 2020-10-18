# CV managment application

Application that manages CV's

## Technologies
* [php](https://www.php.net/)
* [yii2](https://www.yiiframework.com/)
* [nginx](https://www.nginx.com/)
* [postgresql](https://www.postgresql.org/)
* [docker](https://www.docker.com/) 
* [composer](https://getcomposer.org/)
* [OpenApi/Swagger](https://swagger.io/specification/)

## Installation

### Requirements
* git
* docker
* docker-compose

### Manual
1. Install all requirements and run docker service on your system
2. Clone project from git repository `git clone git@github.com:kurrata/cv.git`
2. Make _.env.dist_ copy call _.env_ and edit as needed
3. Build containers `docker-compose build` 
4. Init backend project `docker-compose run php /app_b/init`
5. Edit `backend/common/config/main-local.php` if required
6. Install php libraries with composer `docker-compose run php composer install -d '/app_b/'`
7. Init database `docker-compose run php /app_b/yii migrate`
## Utilities
Build OpenAPI 3 yml file for swagger
> docker-compose run swagger-cli swagger-cli bundle /app_b/api/modules/v1/documentation/openapi3.yml --outfile /app_b/api/web/openapi3.yml --type yaml

Swagger UI with generated documentation. Url may be different if you changed default .env values
> localhost:20080/v1