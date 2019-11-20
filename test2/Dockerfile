FROM ubuntu
RUN apt-get update && apt-get install tzdata
RUN apt-get install apache2 -y
RUN apt-get install php7.2 -y
RUN apt-get install php-mysql -y
RUN apt-get install libapache2-mod-php -y

COPY pdo-master /var/www/html
EXPOSE 80

CMD ["/usr/sbin/apache2ctl", "-DFOREGROUND"]

