FROM php:7.4-fpm

RUN apt-get update -y
RUN apt-get install -y unzip git vim
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer