# образ на основе которого создаётся новый образ
FROM php:8.3-apache

# рабочая директория внутри контейнера
WORKDIR /app

# порт внутри контейнера, на котором работает сервер
EXPOSE 80

# указан новый путь до рабочей директории контейнера для сервера apache
ENV APACHE_DOCUMENT_ROOT /app

# выполнение команд в терминале контейнера
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf \
    && sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf \
    && docker-php-ext-install mysqli && docker-php-ext-enable mysqli


# конфигурация php
COPY /config/php/php.ini "$PHP_INI_DIR/"
#RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"
#RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"