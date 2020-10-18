FROM alpine

RUN apk update
RUN apk add php7 php7-fpm php7-pdo php7-phar php7-pdo_pgsql php7-opcache php7-json php7-iconv php7-openssl php7-curl \
    php7-mbstring php7-ctype php7-dom php7-xml php7-xmlwriter php7-tokenizer php7-session \
    vim unzip git curl

RUN curl -sS https://getcomposer.org/installer | php7 -- --install-dir=/usr/local/bin --filename=composer
RUN sed -i -e 's/listen.*/listen = 0.0.0.0:9000/' /etc/php7/php-fpm.d/www.conf
#RUN sed -i -e 's/;extension=pdo_pgsql/extension=pdo_pgsql/' /etc/php7/php.ini
EXPOSE 9000

CMD ["php-fpm7", "-F"]