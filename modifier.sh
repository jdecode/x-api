#!/bin/bash

# Laravel Boilerplate [XDEV] variables
XDEV_USERNAME='jdecode'
XDEV_REPO='xdev'
XDEV_API_SERVICE_NAME='xdev-api'
XDEV_PG_SERVICE_NAME='xdev-pg'
XDEV_TF_SERVICE_NAME='xdev-tf'
XDEV_IP_FIRST_TWO_OCTETS='100.10'
XDEV_PORT_HTTP='1001'
XDEV_PORT_VITE='1010'
XDEV_PORT_DB='1100'

# Project variables: Please update these before running the script
PROJECT_USERNAME='jdecode'
PROJECT_REPO='xdev'
PROJECT_API_SERVICE_NAME="xdev-api"
PROJECT_PG_SERVICE_NAME="xdev-pg"
PROJECT_TF_SERVICE_NAME="xdev-tf"
PROJECT_IP_FIRST_TWO_OCTETS='222.222'
PROJECT_PORT_HTTP='2222'
PROJECT_PORT_VITE='2022'
PROJECT_PORT_DB='2202'

# Replace XDEV vars with PROJECT vars in files
sed -i -- "s/$XDEV_USERNAME/$PROJECT_USERNAME/g; \
    s/$XDEV_REPO/$PROJECT_REPO/g; \
    s/$XDEV_API_SERVICE_NAME/$PROJECT_API_SERVICE_NAME/g; \
    s/$XDEV_PG_SERVICE_NAME/$PROJECT_PG_SERVICE_NAME/g; \
    s/$XDEV_TF_SERVICE_NAME/$PROJECT_TF_SERVICE_NAME/g; \
    s/$XDEV_IP_FIRST_TWO_OCTETS/$PROJECT_IP_FIRST_TWO_OCTETS/g; \
    s/$XDEV_PORT_HTTP/$PROJECT_PORT_HTTP/g; \
    s/$XDEV_PORT_VITE/$PROJECT_PORT_VITE/g; \
    s/$XDEV_PORT_DB/$PROJECT_PORT_DB/g; \
    " \
    README.md docker-compose.yml composer.json .circleci/config.yml .github/workflows/ci.yml .env.example .env.testing vite.config.js
