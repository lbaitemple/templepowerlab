#!/bin/bash
current=""
while true; do
	latest=`curl http://169.254.169.254/latest/meta-data/public-ipv4`
	#ec2-metadata --public-ipv4`
	echo "public-ipv4=$latest"
	if [ "$current" == "$latest" ]
	then
		echo "ip not changed"
	else
		echo "ip has changed - updating"
		current=$latest
		echo url="https://www.duckdns.org/update?domains=vpltemple&token=dad93ee6-ccd2-4a60-ae95-ff8814b941e7&ip=" | curl -k -o ~/duck
dns/duck.log -K -
	fi
	sleep 5m
done
