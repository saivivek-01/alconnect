FROM php:8.1-apache

# Install PHP extensions
RUN docker-php-ext-install mysqli

# Enable Apache mod_rewrite (if needed)
RUN a2enmod rewrite

# Copy project files into container
COPY . /var/www/html/