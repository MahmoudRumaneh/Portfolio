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

# Fix Apache to serve from Laravel's /public folder (escape quotes and newlines)
RUN bash -c 'cat > /etc/apache2/sites-available/000-default.conf <<EOF\n\
<VirtualHost *:80>\n\
    DocumentRoot /var/www/html/public\n\
    <Directory /var/www/html/public>\n\
        Options Indexes FollowSymLinks\n\
        AllowOverride All\n\
        Require all granted\n\
    </Directory>\n\
</VirtualHost>\n\
EOF'

# Set correct permissions for Laravel
RUN chown -R www-data:www-data storage bootstrap/cache

# Install dependencies and Laravel setup
RUN composer install --no-dev --optimize-autoloader && \
    php artisan key:generate --force && \
    php artisan migrate --force || true && \
    php artisan config:cache && \
    php artisan route:cache && \
    php artisan view:cache

# Expose HTTP port
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
