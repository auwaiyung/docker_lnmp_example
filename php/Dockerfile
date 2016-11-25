FROM php:7.0.13-fpm

ADD php.ini /usr/local/etc/php/php.ini
ADD php-fpm.conf /usr/local/etc/php-fpm.conf

COPY redis.tgz /home/redis.tgz
RUN docker-php-ext-install pdo_mysql
RUN pecl install /home/redis.tgz
RUN echo "extension=redis.so" > /usr/local/etc/php/conf.d/redis.ini
ADD composer.phar /usr/local/bin/composer
RUN chmod 755 /usr/local/bin/composer
