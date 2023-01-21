# templepowerlab
temple powerlab

## git clone
```
cd ~
git clone https://github.com/lbaitemple/templepowerlab/
```


## create duckdns ip
```
cd ~
mkdir duckdns
cd duckdns
cp ~/templepowerlab/duck.sh .
cp ~/templepowerlab/duck_daemon.sh .
chmod 700 duck.sh
chmod +x duck_daemon.sh
sudo chown root duck_daemon.sh
sudo chmod 744 duck_daemon.sh
sudo ./duck_daemon.sh
sudo ln -s ~/duckdns/duck_daemon.sh /etc/rc2.d/S10duckdns
ls -la /etc/rc2.d/
pkill duck
sudo /etc/rc2.d/S10duckdns
```


## start server
```
cd ~/templepowerlab
docker-compose up
```


#### other important docker commands
##### Stop all running containers
```
docker stop $(docker ps -aq)
```

##### Remove all containers
```
docker rm $(docker ps -aq)
```

##### Stop all running containers
```
docker rmi $(docker images -q)
```
##### restart containers
```
sudo docker restart
```

### create let's encrypt ssl
```
sudo docker ps -a
```
find container id
```
sudo docker exec -it $(sudo docker ps -q)  /bin/bash
```
Now, you can add
```
apt-get install software-properties-common
add-apt-repository ppa:certbot/certbot
add-apt-repository universe
apt update
apt-get install python-certbot-apache -y
certbot --apache -d nameurl
```
After enter your email address, you can
```
a
y
2
```
