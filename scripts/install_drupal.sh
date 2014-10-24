#!/bin/bash

## install drush
sudo pear channel-discover pear.drush.org
sudo pear install drush/drush
wget http://download.pear.php.net/package/Console_Table-1.1.3.tgz
sudo tar -xf Console_Table-1.1.3.tgz -C /usr/share/pear/drush/lib

## download drupal
sudo rm -rf /vagrant/html
cd /vagrant/
drush dl drupal --drupal-project-rename=html
cd /vagrant/html

## create DB for drupal
mysqladmin -u root --password="vagrant" create drupal

## install drupal
sudo -u apache drush site-install standard -y --db-url=mysql://root:vagrant@localhost/drupal --site-name="Vagrant dev"

## update permission on drupal files
cd ../
chown -R apache:apache html

echo "Go to http://192.168.33.12/"