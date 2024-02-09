FROM   debian:11

RUN apt-get update && apt-get install -y \
    mariadb-client \
    php \
    php-mysql \
    php-fpm \
    wget

COPY ./www.conf /etc/php/7.4/fpm/pool.d

RUN service php7.4-fpm start

RUN wget -O /usr/local/bin/wp https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar

RUN chmod +x /usr/local/bin/wp

RUN mkdir -p /var/www/html

WORKDIR /var/www/html

COPY /tools/script.sh /

RUN chmod +x /script.sh

EXPOSE 9000

CMD [ "/script.sh" ]