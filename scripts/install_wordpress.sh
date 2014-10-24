#!/bin/bash

## download wordpress
sudo rm -rf /vagrant/html
cd /vagrant/
wget https://wordpress.org/latest.zip
unzip latest.zip
mv wordpress html

## create DB for wordpress
mysqladmin -u root --password="vagrant" create wordpress

## copy the basic config file over to wordpress location
cp /vagrant/scripts/assets/wp-config.php /vagrant/html/wp-config.php

# finish the rest of the install in the admin
echo "Go to http://192.168.33.12/ to finish the rest of the installation process"