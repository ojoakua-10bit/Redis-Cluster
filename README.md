# Redis-Cluster <!-- omit in toc -->

<!-- Please don't mess this one like mongodb and mysql last time -->

Name: Deddy Aitya P.  
NRP: 05111640000069

## Table of Contents <!-- omit in toc -->

- [Configuration and Architechture](#configuration-and-architechture)
  - [Redis Cluster](#redis-cluster)
  - [Web Server](#web-server)
- [Load Testing](#load-testing)
- [Redis Failover Testing](#redis-failover-testing)


## Configuration and Architechture

![architechture](img/arsitektur.png)

There are 5 nodes available on this setup. Here's the IP configuration of the nodes:

```
192.168.16.69 -> hosting_noredis
192.168.16.70 -> hosting_noredis
192.168.16.71 -> redis_node_1 (master)
192.168.16.72 -> redis_node_2 (slave-1)
192.168.16.73 -> redis_node_3 (slave-2)
```

All nodes use `bento/ubuntu18.04` image with 512 MB of RAM.

### Redis Cluster

For the redis cluster, I'm using the `redis-server` and `redis-sentinel` package that is provided by ubuntu's official repository. I use the template provided by ubuntu installation and changed it a bit. Here's some important changes that I've made to the configs.

**/etc/redis/redis.conf [master]**
```
logfile /var/log/redis/redis-server.log
....
#bind 127.0.0.1 ::1
protected-mode no
....
dir /var/lib/redis
```

**/etc/redis/redis.conf [slave]**
```
logfile /var/log/redis/redis-server.log
....
#bind 127.0.0.1 ::1
protected-mode no
....
dir /var/lib/redis
....
slaveof 192.168.16.71 6379
```

**/etc/redis/sentinel.conf [all]**
```
logfile /var/log/redis/redis-sentinel.log
....
protected-mode no
port 26379
....
sentinel myid f9ec5167d09a1d9677a0c3b3630163dfe8f8444b
....
sentinel monitor mymaster 192.168.16.71 2
sentinel down-after-milliseconds mymaster 5000
sentinel failover-timeout mymaster 10000
sentinel parallel-syncs mymaster 2
```

Here's some results after clustering:

**Redis' log**
![redis1](img/redis_1.png)

**Redis Sentinel's log**
![redis2](img/redis_2.png)

**`info replication`**
![redis3](img/redis_3.png)

### Web Server

I'm using LEMP stack on this implementation instead LAMP because I'm more familiar with nginx instead apache2. 

## Load Testing



## Redis Failover Testing