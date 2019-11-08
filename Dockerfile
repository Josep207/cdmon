FROM ubuntu:latest

MAINTAINER josepcruz josepcruz88@gmail.com
RUN docker-php-ext-install pdo_mysql
RUN a2enmod rewrite

ADD . /var/www
ADD ./public /var/www/html
