FROM php:8.2-apache

RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev && docker-php-ext-install sockets

COPY index.html /var/www/html/index.html
COPY styles.css /var/www/html/styles.css
COPY logo.jpg /var/www/html/logo.jpg
COPY check_reseau.php /var/www/html/check_reseau.php
COPY moyen_flag.php /var/www/html/moyen_flag.php 
COPY moyen_reseau.js /var/www/html/moyen_reseau.js

COPY socket.php /usr/src/app/socket.php

RUN chmod +x /usr/src/app/socket.php

EXPOSE 80 12345

CMD service apache2 start && php /usr/src/app/socket.php
