#!/usr/bin/env bash
# set -e # This setting is telling the script to exit on a command error.
# set -x # You refer to a noisy script.(Used to debugging)

echo " "
export DEBIAN_FRONTEND=noninteractive
CURRENT_DATE=$(date "+%Y%m%d%H%M%S")
SCRIPT=$(readlink -f "")
SCRIPTDIR=$(dirname "SCRIPT")
SCRIPTDIRPATH=$(pwd)

if [ "$(whoami)" != "root" ]; then
  SUDO=sudo
fi

echo "Script init.sh started at " ${CURRENT_DATE}

rm -rf composer.phar

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"

rm -rf vendor composer.lock

php composer.phar update -vvv
./vendor/bin/grumphp  git:deinit
./vendor/bin/grumphp  git:init
./vendor/bin/grumphp
#composer require --dev phpro/grumphp


