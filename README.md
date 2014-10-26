Simple LAMP Stack with Vagrant
==============================
Vagrant up will give you basic box with PHP 5.5 and Mysql 5.6.   The goal of this is to have a quick starting point to
work with any LAMP stack based open source CMS's like Wordpress or Drupal.

Setup
-----
Vagrant creates the shared folder as an NFS mount so you will need to enter your HOST machine admin password.

When your VM has finished provisioning you should see a phpinfo page at [192.168.33.12](http://192.168.33.12/).

Database
--------
The provisioning script will set the database details to:
*   user: root
*   password: vagrant

Installing CMSs
---------------
There are 2 pre-made installation scripts for Drupal and Wordpress.

### To install drupal
1. Login to your vagrant box (`vagrant ssh`)
2. Run the command `sh /vagrant/scripts/install_drupal.sh`
3. The admin password will be automatically generate through the script so keep an eye out for that
3. Go to [192.168.33.12](http://192.168.33.12/) when prompted

### To install wordpress
1. Login to your vagrant box (`vagrant ssh`)
2. Run the command `sh /vagrant/scripts/install_wordpress.sh`
3. Go to [192.168.33.12](http://192.168.33.12/) when prompted to finish the rest of the installation process through the
UI

How to use
----------

A pattern for using the repo would be to clone with a specific directory name and do dev inside that directory for your
project.

    cd ~
    git clone git@github.com:paulsheldrake/vagrant.git vagrant_dev
    cd vagrant_dev
    vagrant up

Then login and install the CMS you want.

After you install the CMS you want the HTML folder on your host machine can then be used to make changes to your code as necessary.

You can also for this repo and use it as a starting point for any other vagrant dev stacks you want to setup.

Cheers  
Paul



