#!/bin/bash

# Install dependencies
composer install

# Run migrations and seed the database
php artisan migrate
php artisan db:seed

# Run the development server
php artisan serve
