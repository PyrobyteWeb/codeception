FROM php:8-fpm

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer --version=2.0.2

RUN apt-get update \
    && apt-get install -y \
        git \
        zlib1g-dev \
        libzip-dev \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
        zip \
        pdo \
        pdo_mysql \
        mysqli \
        gd \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

RUN mkdir -p /var/log/supervisor
RUN mkdir -p /var/log/php-fpm

COPY php.ini "$PHP_INI_DIR/php.ini"
EXPOSE 9000

WORKDIR /var/www/html
