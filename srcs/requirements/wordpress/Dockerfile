FROM debian:11

RUN apt update -y && apt upgrade -y && apt-get -y install curl \
&& apt-get -y install wget && apt-get install wp

RUN apt-get install -y php7.3\
    php-fpm\
    php-mysql\
    mariadb-client

RUN wget https://fr.wordpress.org/wordpress-6.0-fr_FR.tar.gz -P /var/www

RUN cd /var/www && tar -xzf wordpress-6.0-fr_FR.tar.gz && rm wordpress-6.0-fr_FR.tar.gz

RUN	chown -R root:root /var/www/wordpress

COPY ./tools/script.sh /
COPY ./tools/wp-config.php /

RUN chmod +x ./script.sh

CMD ["./script.sh"]