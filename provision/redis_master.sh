#!/bin/sh

sh /vagrant/provision/redis_common.sh

sudo cp -v /vagrant/provision/redis_master.conf /etc/redis/redis.conf
sudo cp -v /vagrant/provision/sentinel.conf /etc/redis/sentinel.conf
sudo chown -v redis:redis /etc/redis/redis.conf
sudo chown -v redis:redis /etc/redis/sentinel.conf
sudo systemctl restart redis
sudo systemctl restart redis-sentinel
