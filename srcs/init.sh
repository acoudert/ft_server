#!/bin/bash

# Database set up
mysql_install_db
service mysql start
printf "\nn\ny\ny\ny\ny\n" | mysql_secure_installation
mysql < /tmp/init_db.sql
rm /tmp/init_db.sql

# Wordpress set up
cp -R /usr/share/wordpress /var/www
mv /tmp/wp-config.php /var/www/wordpress/wp-config.php
chown -R www-data:www-data /var/www/wordpress
chmod -R 755 /var/www/wordpress
mv /var/www/wordpress /var/www/42website

# Nginx set up
openssl req -nodes -x509 -newkey rsa:4096 -keyout /etc/ssl/key.pem -out /etc/ssl/cert.pem -days 1 -subj "/C=FR/ST=Paris/L=Paris/O=42/OU=Student/CN=42website"
mv /tmp/42website.conf /etc/nginx/sites-available/42website.conf
ln -s /etc/nginx/sites-available/42website.conf /etc/nginx/sites-enabled/42website.conf
rm /etc/nginx/sites-enabled/default /etc/nginx/sites-available/default

# Phpmyadmin set up
wget -P /tmp https://files.phpmyadmin.net/phpMyAdmin/5.0.4/phpMyAdmin-5.0.4-english.tar.gz
tar -xvf /tmp/phpMyAdmin-5.0.4-english.tar.gz -C /tmp/
rm /tmp/phpMyAdmin-5.0.4-english.tar.gz
mv /tmp/phpMyAdmin-5.0.4-english/ /usr/share/phpmyadmin
mysql < /usr/share/phpmyadmin/sql/create_tables.sql
mysql < /usr/share/phpmyadmin/sql/upgrade_tables_4_7_0+.sql
mv /tmp/config.inc.php /usr/share/phpmyadmin/config.inc.php
mkdir /usr/share/phpmyadmin/tmp
chmod 777 /usr/share/phpmyadmin/tmp
ln -s /usr/share/phpmyadmin/ /var/www/42website/phpmyadmin

# Server start
service php7.3-fpm start
service nginx start
bash
