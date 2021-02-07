# Dockerfile
FROM php:8.0.0-fpm-alpine3.12

ENV MUSL_LOCALE_DEPS cmake make musl-dev gcc gettext-dev libintl 
ENV MUSL_LOCPATH /usr/share/i18n/locales/musl
ENV LANG=es_ES.UTF-8 \
    LANGUAGE=es_ES.UTF-8

RUN apk add --no-cache \
    $MUSL_LOCALE_DEPS \
    && wget https://gitlab.com/rilian-la-te/musl-locales/-/archive/master/musl-locales-master.zip \
    && unzip musl-locales-master.zip \
      && cd musl-locales-master \
      && cmake -DLOCALE_PROFILE=OFF -D CMAKE_INSTALL_PREFIX:PATH=/usr . && make && make install \
      && cd .. && rm -r musl-locales-master

RUN apk add --update oniguruma-dev freetype-dev libpng-dev libjpeg-turbo-dev libxml2-dev autoconf g++ libtool make

RUN apk add --no-cache zip libzip-dev

RUN docker-php-ext-configure gd \
        --enable-gd \
        --with-freetype \
        --with-jpeg

RUN docker-php-ext-configure zip

RUN docker-php-ext-install mysqli gd pdo_mysql opcache bcmath zip soap

RUN apk del autoconf g++ libtool make \
    && rm -rf /tmp/* /var/cache/apk/*

#Instalación de xdebug
#RUN apk --update --no-cache add autoconf g++ make && \
#    pecl install -f xdebug && \
#    docker-php-ext-enable xdebug && \
#    apk del --purge autoconf g++ make
#
## Configure Xdebug
#RUN echo "xdebug.start_with_request=yes" >> /usr/local/etc/php/conf.d/xdebug.ini \
#    && echo "xdebug.mode=debug" >> /usr/local/etc/php/conf.d/xdebug.ini \
#    && echo "xdebug.log=/var/log/xdebug.log" >> /usr/local/etc/php/conf.d/xdebug.ini \
#    && echo "xdebug.discover_client_host=1" >> /usr/local/etc/php/conf.d/xdebug.ini \
#    && echo "xdebug.client_port=9001" >> /usr/local/etc/php/conf.d/xdebug.ini

# Instalar Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Instalar npm
RUN apk add npm 