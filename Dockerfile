FROM php:7.2-apache-stretch

# add a non-user for the container
ARG USER_ID
ARG GROUP_ID

RUN groupadd --gid ${GROUP_ID:-0} jean \
  && useradd --uid ${USER_ID:-0} --gid jean --shell /bin/bash --create-home jean

RUN docker-php-ext-install pdo_mysql mysqli

RUN apt-get update -y && apt-get install -y sendmail libpng-dev

RUN apt-get update && \
    apt-get install -y \
        zlib1g-dev 

RUN docker-php-ext-install mbstring

RUN docker-php-ext-install zip

RUN docker-php-ext-install gd

## install composer

RUN curl -sS https://getcomposer.org/installer -o composer-setup.php

RUN php composer-setup.php --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/html