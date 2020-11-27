FROM php:7-fpm

RUN apt-get update && apt-get install -y \
        libicu-dev libpng-dev \
    && docker-php-ext-install \
        intl gd xsl mysqli pdo pdo_mysql \
    && docker-php-ext-enable \
        intl gd xsl pdo_mysql

