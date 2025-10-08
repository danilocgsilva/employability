FROM php:8.4.7-apache-bookworm

RUN apt-get update
RUN apt-get upgrade -y
RUN apt-get install -y curl git zip
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin/ --filename=composer
RUN curl -sL https://deb.nodesource.com/setup_20.x | bash - 
RUN apt-get install -y nodejs
COPY /config/startup.sh /startup.sh
COPY /config/apache2.conf /etc/apache2/
COPY /config/000-default.conf /etc/apache2/sites-available/
RUN chmod +x /startup.sh

CMD sh /startup.sh