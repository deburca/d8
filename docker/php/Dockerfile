FROM php:7-fpm

RUN apt-get update && apt-get install -y \
        libicu-dev libpng-dev \
    && docker-php-ext-install \
        intl gd xsl \
    && docker-php-ext-enable \
        intl gd xsl

