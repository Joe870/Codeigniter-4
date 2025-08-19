FROM php:8.2-cli

# Install required system packages & extensions
RUN apt-get update && apt-get install -y \
    libicu-dev unzip \
    && docker-php-ext-install intl \
    && docker-php-ext-install mysqli pdo pdo_mysql

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer