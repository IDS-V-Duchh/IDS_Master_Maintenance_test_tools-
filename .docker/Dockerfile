FROM php:7.1-fpm

MAINTAINER Hoang Huy Duc <duchh@vn.ids.jp>

# Set working directory
WORKDIR /var/www/html

# Install dependencies
RUN apt-get update && apt-get install -y && apt-get -y install sudo \
      build-essential \
      mariadb-client \
      libpng-dev \
      libzip-dev \
      libpq-dev \
      libjpeg62-turbo-dev \
      libfreetype6-dev \
      locales \
      zip \
      jpegoptim optipng pngquant gifsicle \
      vim \
      unzip \
      git \
      curl \
      libmagickwand-dev

# Install extensions
RUN docker-php-ext-install gd intl zip exif pdo pdo_pgsql
RUN docker-php-ext-configure gd --with-jpeg=/usr/include/ --with-freetype=/usr/include/