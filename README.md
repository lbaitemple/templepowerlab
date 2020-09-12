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
