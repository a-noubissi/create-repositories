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

#Microsoft Drivers for PHP for SQL Server: https://github.com/Microsoft/msphpsql
# Install selected extensions and other stuff
RUN apt-get update \
    && apt-get -y --no-install-recommends install apt-utils libxml2-dev gnupg apt-transport-https \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

ENV ACCEPT_EULA=Y

RUN curl https://packages.microsoft.com/keys/microsoft.asc | apt-key add - \
    && curl https://packages.microsoft.com/config/debian/9/prod.list > /etc/apt/sources.list.d/mssql-release.list \
    && apt-get update 


#RUN docker-php-ext-install mcrypt && docker-php-ext-enable mcrypt

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
COPY  . /var/www/html/

# Remove Dockerfile and Jenkinsfile 
RUN rm -f Dockerfile Jenkinsfile *.lock

# Copy nginx/php/supervisor configs
RUN cp supervisor.conf /etc/supervisord.conf
RUN cp php.ini /usr/local/etc/php/conf.d/app.ini
RUN cp php.ini /usr/local/etc/php/php.ini
RUN cp nginx.conf /etc/nginx/sites-enabled/default

# PHP Error Log Files
RUN mkdir /var/log/php
RUN touch /var/log/php/errors.log && chmod 777 /var/log/php/errors.log

RUN composer config github-oauth.github.com $GITHUB_KEY


RUN chmod -R 777 /var/www/html/

RUN chmod +x /var/www/html/run.sh

EXPOSE 80
ENTRYPOINT ["/var/www/html/run.sh"]


#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