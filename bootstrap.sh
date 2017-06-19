#!/bin/bash

# =============================================================================
# VAGRANT PROVISIONING SCRIPT
# =============================================================================

echo "Mengupdate ubuntu repo list"
sudo apt-get update

echo "Menginstall package basic"
sudo apt-get install -y debconf-utils software-properties-common build-essential python-software-properties git vim curl

echo "Menambahkan repository PHP"
sudo add-apt-repository ppa:ondrej/php
sudo apt-get update

echo "Menginstall Nginx"
sudo apt-get install -y nginx

echo "Menginstall PHP"
sudo apt-get install -y php5.6 php5.6-intl php5.6-xdebug php5.6-xml php5.6-curl php5.6-zip php5.6-mysql php5.6-mbstring php5.6-fpm php5.6-gd php-apcu

echo "Menginstall Composer"
# install Composer
curl -s https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer

echo "Menginstall NodeJS"
# install nodejs
curl -sL https://deb.nodesource.com/setup_4.x | sudo -E bash -
sudo apt-get install -y nodejs

echo "Menginstall RVM"
gpg --keyserver hkp://keys.gnupg.net --recv-keys 409B6B1796C275462A1703113804BB82D39DC0E3
curl -sSL https://get.rvm.io | bash -s stable --ruby
source $HOME/.rvm/scripts/rvm
rvm install ruby-2.3
rvm --default use ruby-2.3
gem install compass

echo "Konfigurasi Virtual Host & PHP"
sudo rm -Rfv /var/www/html
sudo rm -v /etc/nginx/sites-enabled/default
sudo ln -sv /var/www/nginx.conf /etc/nginx/sites-enabled/default
echo 'echo "cgi.fix_pathinfo = 0" >> /etc/php/5.6/fpm/conf.d/user.ini' | sudo -s
echo 'echo "date.timezone = Asia/Jakarta" >> /etc/php/5.6/fpm/conf.d/user.ini' | sudo -s
echo 'echo "session.gc_maxlifetime = 86400 >> /etc/php/5.6/fpm/conf.d/user.ini' | sudo -s
sudo systemctl reload nginx
sudo systemctl restart nginx

echo "Menginstall GulpJS"
sudo npm install -g gulp-cli
