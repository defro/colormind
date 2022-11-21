# Read how to launch here: docs/docker.md

FROM php:8.1-cli

MAINTAINER Joël Gaujard <j.gaujard@gmail.com>

# Install zip
RUN apt-get update && apt-get install -y zip vim

# Install xDebug
RUN pecl install xdebug && docker-php-ext-enable xdebug
ENV XDEBUG_MODE coverage

# Access to source code
COPY . /application
WORKDIR /application

# Install composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
RUN mkdir /var/composer
ENV COMPOSER_HOME /var/composer
ENV COMPOSER_ALLOW_SUPERUSER 1
RUN /usr/bin/composer install --prefer-dist
