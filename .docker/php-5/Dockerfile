FROM php:5.6-fpm-alpine AS php-base

RUN apk --no-cache --update add git zip unzip vim libmcrypt-dev libltdl libxslt-dev rsync supervisor && \
  apk add zlib-dev libressl-dev autoconf g++ make && \
  pecl channel-update pecl.php.net && \
  (yes "" | pecl install mongo) && \
  docker-php-ext-install mcrypt pdo pdo_mysql json xml pcntl soap && \
  docker-php-ext-enable mongo && \
  apk add nginx && \
  apk del --purge zlib-dev libressl-dev autoconf g++ make && \
  rm -rf /var/cache/apk/* && \
  rm -rf /tmp/*

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
