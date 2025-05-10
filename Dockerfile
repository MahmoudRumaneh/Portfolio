FROM php:8.2-apache

# Enable mod_rewrite for Laravel routing
RUN a2enmod rewrite

# Install system dependencies and PHP extensions
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
    nodejs \
    npm \
    && docker-php-ext-install pdo pdo_mysql zip

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . .

# Configure Apache to serve from /public
RUN printf "<VirtualHost *:80>\n\
    DocumentRoot /var/www/html/public\n\
    <Directory /var/www/html/public>\n\
        Options Indexes FollowSymLinks\n\
        AllowOverride All\n\
        Require all granted\n\
    </Directory>\n\
</VirtualHost>\n" > /etc/apache2/sites-available/000-default.conf

# Set permissions
RUN chown -R www-data:www-data storage bootstrap/cache

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# ✅ Install Node dependencies and build assets for Vite/Bootstrap
RUN npm install && npm run build

RUN npx vite build

RUN ls -R public/build

# Expose HTTP port
EXPOSE 80

CMD ["apache2-foreground"]
