# Redis-Cluster

<!-- Please don't mess this one like mongodb and mysql last time -->

Name: Deddy Aitya P.  
NRP: 05111640000069

## Table of Content

- [Redis-Cluster](#redis-cluster)
  - [Table of Content](#table-of-content)
  - [Configuration and Architechture](#configuration-and-architechture)
    - [Redis Cluster](#redis-cluster)


## Configuration and Architechture

![architechture](img/arsitektur.png)

There are 5 nodes available on this setup. Here's the node configuration:

```
192.168.16.69 -> hosting_noredis
192.168.16.70 -> hosting_noredis
192.168.16.71 -> redis_node_1 (master)
192.168.16.72 -> redis_node_2 (slave-1)
192.168.16.73 -> redis_node_3 (slave-2)
```

### Redis Cluster

