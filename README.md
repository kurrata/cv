# CV managment application

Application that manages CV's

## Technologies
* [php](https://www.php.net/)
* [yii2](https://www.yiiframework.com/)
* [nginx](https://www.nginx.com/)
* [postgresql](https://www.postgresql.org/)
* [docker](https://www.docker.com/) 
* [composer](https://getcomposer.org/)

## Installation

### Requirements
* git
* docker
* docker-compose

### Manual
1. Install all requirements and run docker service on your system
2. Make _.env.example_ file copy with name _.env_ and fill variables
2. Build containers
> docker-compose build
3. Init backend project
> docker-compose run php /app_b/init
4. Install php libraries with composer
> docker-compose run php composer install -d '/app_b/'
