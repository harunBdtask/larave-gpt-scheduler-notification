FROM php:8.2-fpm

# Arguments defined in docker-compose.yml
ARG user
ARG uid

# Install system dependencies
RUN apt-get update && \
    apt-get install -y \
        git \
        curl \
        libonig-dev \
        libxml2-dev \
        libzip-dev \
        zip \
        unzip \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        libgd-dev && \
    docker-php-ext-configure gd --with-jpeg

# Install Node.js
RUN curl -fsSL https://deb.nodesource.com/setup_lts.x | bash - && \
    apt-get install -y nodejs

# Install PHP extensions
RUN docker-php-ext-install \
        zip \
        pdo_mysql \
        mbstring \
        exif \
        pcntl \
        bcmath \
        gd

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Create system user to run Composer and Artisan Commands
RUN useradd -G www-data,root -u $uid -d /home/$user $user && \
    mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

# Set working directory
WORKDIR /var/www

USER $user
