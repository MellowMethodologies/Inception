#!/bin/sh
sleep 6
if [! -f "/var/www/html/wp-config.php" ]; then
	echo "File exists."
else
	
	wget https://wordpress.org/latest.tar.gz && \
    tar -xvzf latest.tar.gz --strip-components=1 && \
    rm latest.tar.gz
	
	wp core download --allow-root
	wp config create --allow-root --dbname=${MARIADB_DATABASE} --dbuser=${WP_ADMIN_LOGIN} --dbpass=${WP_ADMIN_PASSWORD} --dbhost=${DB_HOST} --extra-php --path='/var/www/html'
	wp core install --allow-root --url=${WP_URL} --title=${WP_TITLE} --admin_user=${WP_ADMIN_LOGIN} --admin_password=${WP_ADMIN_PASSWORD} --admin_email=${WP_ADMIN_EMAIL}
	wp user create --allow-root ${WP_USER_LOGIN} ${WP_USER_EMAIL} --user_pass=${WP_USER_PASSWORD}

fi
# sleep 100

php-fpm7.4 -F