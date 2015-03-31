#!/bin/bash

echo "## Update the system"
sudo yum update -y

echo "## Start installing necessary repos"
wget http://dl.iuscommunity.org/pub/ius/stable/Redhat/6/x86_64/ius-release-1.0-13.ius.el6.noarch.rpm
sudo yum install ius-release-1.0-13.ius.el6.noarch.rpm -y

echo "## We are removing the default mysql-libs from the centos box which will be replaced with the new libs from mysql56"
MYSQL_LIBS=$(rpm -qa | grep mysql-libs)
echo $MYSQL_LIBS
if [ -z "$MYSQL_LIBS" ]
  then
    echo "###### mysql-libs have already been removed"
  else
    echo "###### we are removing the default mysql-libs from centos"
    sudo rpm -e --nodeps mysql-libs
fi


echo "## Install mysql"
sudo yum install mysql56u-server -y

echo "## Install php"
sudo yum install -y php55u php55u-mysqlnd php55u-bcmath php55u-gd php55u-xml php55u-mbstring php55u-mcrypt php55u-soap php55u-xml

echo "## Install some dev tools"
sudo yum install -y git unzip

echo "## Turn off IP Tables"
sudo service iptables stop

echo "## Start apache"
sudo service httpd start
sudo chkconfig httpd on

echo "## Start mysql and make it slightly more secure"
sudo service mysqld start
sudo chkconfig mysqld on

echo "## Set mysql root password"
mysqladmin -u root password vagrant

echo "## Add vagrant to apache group"
sudo usermod -a -G apache vagrant

echo "## Fix the folder permissions for the html directory"
sudo chown -R apache:apache /var/www
sudo chmod 2775 /var/www
find /var/www -type d -exec sudo chmod 2775 {} +
find /var/www -type f -exec sudo chmod 0664 {} +

echo "## Fix the httpd.conf so clean urls work"
sudo sed -i '338s/.*/    AllowOverride All/' /etc/httpd/conf/httpd.conf
sudo service httpd restart

echo "## Symlink vagrant html folder to location apache user"
rm -rf /var/www/html
ln -s /vagrant/html /var/www/html

echo "Go to http://192.168.33.10/ in your browser"
