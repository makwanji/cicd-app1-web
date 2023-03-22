#!/bin/bash

#Install compose
composer install

#Install npn
npm install
npm run build
composer require livewire/livewire

php artisan livewire:publish --config
php artisan livewire:publish --assets

#Php command
php artisan key:generate
php artisan optimize:clear
php artisan serve
