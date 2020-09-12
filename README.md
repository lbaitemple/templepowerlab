# templepowerlab
temple powerlab


## create duckdns ip
```
cd 
mkdir duckdns
cd duckdns
wget https://raw.githubusercontent.com/lbaitemple/templepowerlab/master/duck.sh?token=AEOCCLRJWR3DJGYFPI3OFQ27LQNWU
wget https://raw.githubusercontent.com/lbaitemple/templepowerlab/master/duck_daemon.sh?token=AEOCCLVRFPH7BNA7NQTQWR27LQNX2
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
