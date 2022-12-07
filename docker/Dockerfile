FROM php:8.0-apache

ENV COMPOSER_ALLOW_SUPERUSER=1

#RUN docker-html-ext-install mysqli && docker-html-ext-enable mysqli
RUN apt-get update && apt-get upgrade -y && apt-get install -qy curl \
			git \
			libzip-dev \
			mariadb-client

RUN php -r "readfile('https://getcomposer.org/installer');" | php -- --install-dir=/usr/local/bin --filename=composer

RUN docker-php-ext-install mysqli \
	pdo \
	pdo_mysql

RUN pecl install zip && docker-php-ext-install zip

RUN pecl install xdebug && docker-php-ext-enable xdebug

COPY ./docker/docker-php-ext-xdebug3-ext.ini /usr/local/etc/php/conf.d/docker-php-ext-xdebug-ext.ini
COPY ./docker/docker-php-extra.ini /usr/local/etc/php/conf.d/docker-php-extra.ini

