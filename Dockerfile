FROM php:7.4-fpm

# Set working directory to /var/www/html
WORKDIR /var/www/html

# Copy composer.lock and composer.json
COPY composer.lock composer.json /var/www/html/

# Install dependencies
RUN composer install --no-dev --prefer-dist

# Copy application code
COPY . /var/www/html/

# Expose port 80
EXPOSE 80

# Run composer dump-autoload
RUN composer dump-autoload

# Run artisan migrate
RUN php artisan migrate

# Run artisan db:seed
RUN php artisan db:seed

# Run artisan optimize
RUN php artisan optimize

# Run command to start PHP-FPM
CMD ["php", "-S", "0.0.0.0:80"]