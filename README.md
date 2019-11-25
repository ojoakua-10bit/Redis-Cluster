# Redis-Cluster

<!-- Please don't mess this one like mongodb and mysql last time -->

Name: Deddy Aitya P.  
NRP: 05111640000069

## Table of Content

- [Redis-Cluster](#redis-cluster)
  - [Table of Content](#table-of-content)
  - [Configuration and Architechture](#configuration-and-architechture)
    - [Redis Cluster](#redis-cluster)
    - [Web Server](#web-server)
  - [Load Testing](#load-testing)
  - [Failover Testing](#failover-testing)


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

For the redis cluster, I'm using the `redis-server` and `redis-sentinel`


### Web Server

I'm using LEMP stack on this implementation instead LAMP because I'm more familiar with nginx instead apache2. 

## Load Testing

## Failover Testing