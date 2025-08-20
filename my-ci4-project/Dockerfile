FROM php:8.2-apache

# Install dependencies
RUN apt-get update && apt-get install -y \
    libicu-dev \
    libzip-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    unzip \
    git \
    pkg-config \
    libonig-dev \
 && docker-php-ext-configure gd --with-freetype --with-jpeg \
 && docker-php-ext-install -j$(nproc) intl mysqli pdo_mysql zip gd mbstring \
 && a2enmod rewrite \
 && sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|g' /etc/apache2/sites-available/000-default.conf \
 && echo "ServerName localhost" >> /etc/apache2/apache2.conf \
 && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/html