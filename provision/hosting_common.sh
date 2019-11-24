#!/bin/sh

sudo apt-get update #&& sudo apt-get upgrade -y
sudo apt-get install nginx -y
sudo apt-get install php7.2-cli php7.2-fpm php7.2-mysql php7.2-redis php7.2-json php7.2-opcache php7.2-mbstring php7.2-xml php7.2-gd php7.2-curl -y
sudo apt-get install mariadb-server -y

sudo mysql -u root < /vagrant/provision/wordpress-init.sql
sudo cp -v /vagrant/provision/nginx-default /etc/nginx/sites-available/default
sudo nginx -t && sudo systemctl restart nginx

wget -nv https://wordpress.org/latest.tar.gz
tar xvf latest.tar.gz
sudo mv wordpress /var/www/html/ -v
sudo chown -Rv www-data:www-data /var/www/html

