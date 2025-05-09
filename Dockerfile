FROM php:8.2-apache

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    curl \
    sqlite3 \
    && docker-php-ext-install pdo pdo_mysql zip

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy all project files
COPY . .

# Install dependencies (this is what was missing)
RUN composer install --no-dev --optimize-autoloader

# Laravel setup (these were previously in render.yaml)
RUN php artisan key:generate --force && \
    php artisan migrate --force || true && \
    php artisan config:cache && \
    php artisan route:cache && \
    php artisan view:cache

# Set correct permissions
RUN chown -R www-data:www-data storage bootstrap/cache

# Expose HTTP port
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
