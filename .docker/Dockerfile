FROM php:8.3-alpine

USER root

RUN apk add php-dom php-xml php-xmlwriter

COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /var/app
