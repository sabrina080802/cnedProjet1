FROM composer:lts as build
COPY . /app/
RUN composer install --no-dev --no-interaction --optimize-autoloader


FROM php:8.3-fpm

RUN apt-get update -y && \
    apt-get install -y sqlite3 libsqlite3-dev nginx

COPY default.conf /etc/nginx/conf.d/default.conf

# PHP_CPPFLAGS are used by the docker-php-ext-* scripts
ENV PHP_CPPFLAGS="$PHP_CPPFLAGS -std=c++11"

RUN docker-php-ext-install pdo_sqlite \
    && docker-php-ext-install pdo_mysql \
    && docker-php-ext-install opcache \
    && apt-get install libicu-dev -y \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl \
    && apt-get remove libicu-dev icu-devtools -y

COPY --from=build --chown=www-data:www-data /app /app
WORKDIR /app

COPY entrypoint.sh /
RUN chmod +x /entrypoint.sh

ENV APP_ENV=prod

EXPOSE 80 443

ENTRYPOINT [ "/entrypoint.sh" ]