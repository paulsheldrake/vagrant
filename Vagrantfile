# -*- mode: ruby -*-
# vi: set ft=ruby :

# Vagrantfile API/syntax version. Don't touch unless you know what you're doing!
VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|

  config.vm.box = "CentOS-6.5-x86_64"
  config.vm.box_url = "https://developer.nrel.gov/downloads/vagrant-boxes/CentOS-6.5-x86_64-v20140504.box"
  config.vm.network "private_network", ip: "192.168.33.10"

  config.vm.provision "shell", path: "scripts/provision.sh"

  config.vm.synced_folder ".", "/vagrant", id: "core", :nfs => true,  :mount_options   => ['nolock,vers=3,udp']
end
