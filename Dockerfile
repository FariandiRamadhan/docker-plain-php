FROM php:8.2-apache

RUN a2enmod rewrite

RUN apt-get update -y && apt-get install -y \
    default-mysql-client

# PHP Extension
RUN docker-php-ext-install mysqli
# CMD "php -m | grep mysqli"