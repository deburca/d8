FROM php:7-fpm

RUN apt-get update && apt-get install -y \
        libicu-dev libpng-dev libxslt1-dev libzip-dev \
    && echo no | pecl install -f apcu \
    && docker-php-ext-install \
        intl gd xsl mysqli pdo pdo_mysql bcmath calendar exif gettext pcntl shmop opcache zip \
    && docker-php-ext-enable \
        apcu intl gd xsl mysqli pdo pdo_mysql bcmath calendar exif gettext pcntl shmop opcache zip

