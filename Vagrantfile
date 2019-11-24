# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

  config.vm.define "redis_node_1" do |redis_node_1|
    redis_node_1.vm.hostname = "redis-node-1"
    redis_node_1.vm.box = "bento/ubuntu-18.04"
    redis_node_1.vm.network "private_network", ip: "192.168.16.71"
        
    redis_node_1.vm.provider "virtualbox" do |vb|
      vb.name = "redis-node-1"
      vb.gui = false
      vb.memory = "512"
    end

    redis_node_1.vm.provision "shell", path: "provision/redis_master.sh", privileged: false
  end

  config.vm.define "redis_node_2" do |redis_node_2|
    redis_node_2.vm.hostname = "redis-node-2"
    redis_node_2.vm.box = "bento/ubuntu-18.04"
    redis_node_2.vm.network "private_network", ip: "192.168.16.72"
    
    redis_node_2.vm.provider "virtualbox" do |vb|
      vb.name = "redis-node-2"
      vb.gui = false
      vb.memory = "512"
    end

    redis_node_2.vm.provision "shell", path: "provision/redis_slave.sh", privileged: false
  end

  config.vm.define "redis_node_3" do |redis_node_3|
    redis_node_3.vm.hostname = "redis-node-3"
    redis_node_3.vm.box = "bento/ubuntu-18.04"
    redis_node_3.vm.network "private_network", ip: "192.168.16.73"
    
    redis_node_3.vm.provider "virtualbox" do |vb|
      vb.name = "redis-node-3"
      vb.gui = false
      vb.memory = "512"
    end

    redis_node_3.vm.provision "shell", path: "provision/redis_slave.sh", privileged: false
  end

  config.vm.define "hosting_redis" do |hosting_redis|
    hosting_redis.vm.hostname = "hosting-redis"
    hosting_redis.vm.box = "bento/ubuntu-18.04"
    hosting_redis.vm.network "private_network", ip: "192.168.16.70"
    
    hosting_redis.vm.provider "virtualbox" do |vb|
      vb.name = "hosting-redis"
      vb.gui = false
      vb.memory = "512"
    end

    hosting_redis.vm.provision "shell", path: "provision/hosting_noredis.sh", privileged: false
  end

  config.vm.define "hosting_noredis" do |hosting_noredis|
    hosting_noredis.vm.hostname = "hosting-noredis"
    hosting_noredis.vm.box = "bento/ubuntu-18.04"
    hosting_noredis.vm.network "private_network", ip: "192.168.16.69"
    
    hosting_noredis.vm.provider "virtualbox" do |vb|
      vb.name = "hosting-noredis"
      vb.gui = false
      vb.memory = "512"
    end

    hosting_noredis.vm.provision "shell", path: "provision/hosting_redis.sh", privileged: false
  end

end
