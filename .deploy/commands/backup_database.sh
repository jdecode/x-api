#!/bin/bash

# env variables:
# ALLOW_BACKUP: bool

if [ "$ALLOW_BACKUP" != "true" ]; then
    echo "Backup before deployment is turned off"
    exit 0
fi

echo "Starting DB backup"

bash ./vendor/backup.sh -db before_deployment

echo "Backup finished"
