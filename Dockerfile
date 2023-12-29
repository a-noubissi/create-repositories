FROM php:8.2-fpm

WORKDIR /var/www/html

RUN curl -sSLf \
        -o /usr/local/bin/install-php-extensions \
        https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions && \
        chmod +x /usr/local/bin/install-php-extensions && \
        install-php-extensions gd xdebug

# Install dependencies
RUN apt-get update && apt-get install -y \
    apt-utils \
    libmcrypt-dev \
    libicu-dev \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    libzip-dev \
    zip \
    jpegoptim optipng pngquant gifsicle \
    unzip \
    git \
    curl \
    lua-zlib-dev \
    libmemcached-dev \
    nano \
    iputils-ping\
    nginx

RUN apt-get update \
    && apt-get install -y libpq-dev \
    && docker-php-ext-install pgsql pdo_pgsql pdo

RUN apt-get update && apt-get install -y \
    librabbitmq-dev \
    && pecl install amqp \
    && docker-php-ext-enable amqp

RUN docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/ && \
    docker-php-ext-install -j$(nproc) gd && docker-php-ext-install gd &&  docker-php-ext-install -j$(nproc) intl && \
    docker-php-ext-install zip && docker-php-ext-enable zip && \ 
    docker-php-ext-install soap && docker-php-ext-enable soap

# Install supervisor
RUN apt-get install -y supervisor

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer --version=2.1.9

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

RUN chown -R www-data:www-data  /var/www/
RUN chmod -R 777 /var/www/html/

# Copy code to /var/www/html
COPY  ./code /var/www/html/

# Copy nginx/php/supervisor configs
RUN cp ./config/supervisor.conf /etc/supervisord.conf
RUN cp ./config/php.ini /usr/local/etc/php/conf.d/app.ini
RUN cp ./config/php.ini /usr/local/etc/php/php.ini
RUN cp ./config/nginx.conf /etc/nginx/sites-enabled/default

# PHP Error Log Files
RUN mkdir /var/log/php && touch /var/log/php/errors.log && chmod 777 /var/log/php/errors.log

RUN composer config github-oauth.github.com $GITHUB_KEY
#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
RUN chmod +x /var/www/html/config/run.sh

EXPOSE 80
ENTRYPOINT ["/var/www/html/config/run.sh"]