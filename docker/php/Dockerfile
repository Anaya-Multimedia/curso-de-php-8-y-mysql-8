#FROM php:7.2-fpm
 
#RUN docker-php-ext-install mysqli

FROM martinpham/php8:fpm-alpine

#Añadido php.ini con la configuración de JIT
COPY php.ini /usr/local/etc/php/


#Añadidas varias configuraciones para el tratamiento de imágenes
COPY --from=composer /usr/bin/composer /usr/bin/composer

RUN apk add --update oniguruma-dev freetype-dev libpng-dev libjpeg-turbo-dev libxml2-dev autoconf g++ libtool make

RUN docker-php-ext-configure gd \
        --enable-gd \
        --with-freetype \
        --with-jpeg

RUN docker-php-ext-install mysqli gd pdo_mysql opcache

RUN apk del autoconf g++ libtool make \
    && rm -rf /tmp/* /var/cache/apk/*

