FROM ubuntu:16.04

ENV TZ=Etc/UTC
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

# Install package containing add-apt-repository utility
RUN apt-get update && apt-get install -y software-properties-common python-software-properties

# Add PPA repository for PHP7.2
RUN LC_ALL=C.UTF-8 add-apt-repository ppa:ondrej/php
RUN apt-key adv --keyserver keyserver.ubuntu.com --recv-keys 4F4EA0AAE5267A6C

RUN apt-get update && apt-get install -y \
    apache2 \
    git \
    zip \
    unzip \
    php7.2 \
    libapache2-mod-php7.2 \
#    php7.2-mcrypt \
    php7.2-gd \
    php7.2-mbstring \
    php7.2-mysql \
    php7.2-xml \
    php7.2-dev \
    curl \
    php7.2-curl \
    php-xdebug \
    ntpdate \
    libaio1 \
    build-essential \
    apt-transport-https \
    php-xml \
    php7.2-xml \
    supervisor

RUN DEBIAN_FRONTEND=noninteractive apt-get install -y postfix

RUN a2enmod rewrite

#RUN a2enmod ssl \
#&& openssl genrsa -des3 -passout pass:x -out /etc/apache2/server.pass.key 2048 \
#&& openssl rsa -passin pass:x -in /etc/apache2/server.pass.key -out /etc/apache2/server.key \
#&& rm /etc/apache2/server.pass.key \
#&& openssl req -new -key /etc/apache2/server.key -out /etc/apache2/server.csr -subj "/C=US/ST=NC/L=Charlotte/O=RILEYSTECH/CN=dev.gurpay.com" \
#&& openssl x509 -req -sha256 -days 365 -in /etc/apache2/server.csr -signkey /etc/apache2/server.key -out /etc/apache2/server.crt -extfile /etc/myssl.cnf -extensions v3_req

#RUN a2ensite default-ssl.conf

RUN curl -sS https://getcomposer.org/installer | php \
&& mv composer.phar /usr/local/bin/composer \
&& chmod +x /usr/local/bin/composer

RUN echo "zend_extension=/usr/lib/php/20151012/xdebug.so" >> /etc/php/7.2/apache2/php.ini \
&& echo "xdebug.remote_enable=1" >> /etc/php/7.2/apache2/php.ini \
&& echo "xdebug.remote_host=10.26.55.207" >> /etc/php/7.2/apache2/php.ini \
&& echo "xdebug.remote_enable=on" >> /etc/php/7.2/apache2/php.ini \
&& echo "xdebug.remote_autostart=off" >> /etc/php/7.2/apache2/php.ini \
&& echo "xdebug.remote_port=9000" >> /etc/php/7.2/apache2/php.ini

COPY ./docker/containerStart.sh /containerStart.sh
RUN chmod +x /start.sh

#COPY ./ /var/www/html
COPY ./docker/config/000-default.conf /etc/apache2/sites-available/000-default.conf
COPY ./docker/config/default-ssl.conf /etc/apache2/sites-available/default-ssl.conf
COPY ./docker/config/myssl.conf /etc/myssl.conf

#COPY ./docker/config/postfix.conf /etc/postfix/main.cf


#RUN chown 777 /var/www/html

#COPY . /var/www/html/app





CMD ["bash", "/containerStart.sh"]