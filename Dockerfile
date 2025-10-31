FROM php:8.2-apache

# Install any required PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Enable Apache mod_rewrite and allow .htaccess overrides
RUN a2enmod rewrite \
    && sed -ri 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf

# Copy your application code into the container
COPY . /var/www/html

# Expose port 80 for the web server
EXPOSE 80
