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

echo "Script test.sh started at " ${CURRENT_DATE}

touch $(pwd)/t.${CURRENT_DATE}.txt
