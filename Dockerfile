# Use the official PHP image with Apache
FROM php:apache

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Install mysqli extension
RUN docker-php-ext-install mysqli

# Optionally, copy your application files if you're not using volumes
# COPY . /var/www/html
