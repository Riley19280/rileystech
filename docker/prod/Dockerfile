FROM ubuntu:16.04

ENV TZ=Etc/UTC
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

# Install package containing add-apt-repository utility
RUN apt-get update && apt-get install -y software-properties-common python-software-properties

# Add PPA repository for PHP7.1
RUN LC_ALL=C.UTF-8 add-apt-repository ppa:ondrej/php
RUN apt-key adv --keyserver keyserver.ubuntu.com --recv-keys 4F4EA0AAE5267A6C

RUN apt-get update && apt-get install -y \
    apache2 \
    git \
    zip \
    unzip \
    php7.2 \
    libapache2-mod-php7.2 \
    php7.2-mcrypt \
    php7.2-gd \
    php7.2-mbstring \
    php7.2-mysql \
    php7.@-xml \
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

RUN a2enmod rewrite


RUN curl -sS https://getcomposer.org/installer | php \
&& mv composer.phar /usr/local/bin/composer \
&& chmod +x /usr/local/bin/composer

COPY ./docker/containerStart.sh /containerStart.sh
RUN chmod +x /containerStart.sh

#COPY ./ /var/www/html
COPY ./docker/config/000-default.conf /etc/apache2/sites-available/000-default.conf
#COPY ./docker/config/default-ssl.conf /etc/apache2/sites-available/default-ssl.conf
COPY ./docker/config/supervisord.conf /etc/supervisord.conf

#RUN a2ensite default-ssl.conf

COPY . /var/www/html/app

RUN chmod -R 777 /var/www/html

EXPOSE 80

CMD ["bash", "/containerStart.sh"]