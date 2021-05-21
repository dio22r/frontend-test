FROM php:7.4.19-apache

RUN docker-php-ext-install mysqli pdo pdo_mysql gettext

COPY . /var/www/html/