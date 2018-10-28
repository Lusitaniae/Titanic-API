# Base minimal image with FPM
FROM php:7.2-fpm-alpine

# Install dependencies
RUN docker-php-ext-install mysqli pdo pdo_mysql
