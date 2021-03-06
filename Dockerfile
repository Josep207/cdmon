FROM php:7.2.2-fpm
MAINTAINER josepcruz josepcruz88@gmail.com
RUN apt-get update -y && apt-get install -y libmcrypt-dev openssl git
RUN docker-php-ext-install pdo 
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install pdo 
WORKDIR /app
COPY . /app
RUN composer install --prefer-dist
CMD php artisan serve --host=127.0.0.1 --port=8000
EXPOSE 8000
