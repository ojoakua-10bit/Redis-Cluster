#!/bin/sh

sh /vagrant/provision/hosting_common.sh

sudo cp -v /vagrant/provision/wp-config-redis.php /var/www/html/wordpress/wp-config.php
