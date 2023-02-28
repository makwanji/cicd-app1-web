FROM php:8.2-apache

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/rts-web

COPY . /var/www/rts-web

RUN a2enmod rewrite

RUN service apache2 restart

RUN composer install

RUN cp .env.example .env

RUN chmod -R 777 storage/

RUN php artisan key:generate

RUN curl -sL https://deb.nodesource.com/setup_19.x | bash

RUN apt install nodejs

RUN npm install

RUN npm run build

RUN chmod -R 777 bootstrap/cache/

RUN composer require livewire/livewire

RUN php artisan livewire:publish --config

RUN php artisan livewire:publish --assets