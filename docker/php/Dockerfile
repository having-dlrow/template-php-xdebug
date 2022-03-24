FROM php:7.4.21-fpm

RUN apt-get update \
    && apt-get install -y lsof libzip-dev

RUN pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && docker-php-ext-install zip \

