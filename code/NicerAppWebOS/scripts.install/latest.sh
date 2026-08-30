#!/bin/bash
cd ~/Downloads
apt update
apt -y upgrade
apt -y dist-upgrade
apt install -y wget composer apache2 php php-dev libapache2-mod-php php-imap curl php-curl php-mailparse curl git imagemagick npm net-tools python3-chardet apt-transport-https gnupg wordnet
a2enmod headers rewrite
curl https://couchdb.apache.org/repo/keys.asc | gpg --dearmor | sudo tee /usr/share/keyrings/couchdb-archive-keyring.gpg >/dev/null 2>&1
source /etc/os-release
echo "deb [signed-by=/usr/share/keyrings/couchdb-archive-keyring.gpg] https://apache.jfrog.io/artifactory/couchdb-deb/ noble main" | sudo tee /etc/apt/sources.list.d/couchdb.list >/dev/null
apt update
apt install -y couchdb
cd /var/www
if [ ! -d "/var/www/NicerAppWebOS-v6.y.z" ]; then
  mkdir NicerAppWebOS-v6.y.z
  chown www-data:www-data NicerAppWebOS-v6.y.z
  chmod 750 NicerAppWebOS-v6.y.z
  cd NicerAppWebOS-v6.y.z
  mkdir code
  chown www-data:www-data code
  chmod 750 code

  mkdir downloads
  cd downloads
  wget https://nicer.app/downloads/NicerAppWebOS-v6.y.z/NicerAppWebOS-v6.0.0-alpha-2.0.0.zip
  unzip NicerAppWebOS-v6.0.0-alpha-2.0.0.zip -d ..

  cd ..
fi
