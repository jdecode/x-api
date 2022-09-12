#!/bin/bash

# Laravel Boilerplate [LBP] variables
LBP_REPO='xdev'
LBP_API_SERVICE_NAME='xdev-api'
LBP_PG_SERVICE_NAME='xdev-pg'
LBP_TF_SERVICE_NAME='xdev-tf'
LBP_IP_FIRST_TWO_OCTETS='100.10'
LBP_PORT_HTTP='1001'
LBP_PORT_VITE='1010'
LBP_PORT_DB='1100'

# Project variables: Please update these before running the script
PROJECT_REPO='project'
PROJECT_API_SERVICE_NAME="$PROJECT_REPO-api"
PROJECT_PG_SERVICE_NAME="$PROJECT_REPO-pg"
PROJECT_TF_SERVICE_NAME="$PROJECT_REPO-tf"
PROJECT_IP_FIRST_TWO_OCTETS='100.11'
PROJECT_PORT_HTTP='100'
PROJECT_PORT_VITE='101'
PROJECT_PORT_DB='110'

# Replace LBP vars with PROJECT vars in files
sed -i -- "s/$LBP_REPO/$PROJECT_REPO/g; \
    s/$LBP_API_SERVICE_NAME/$PROJECT_API_SERVICE_NAME/g; \
    s/$LBP_PG_SERVICE_NAME/$PROJECT_PG_SERVICE_NAME/g; \
    s/$LBP_TF_SERVICE_NAME/$PROJECT_TF_SERVICE_NAME/g; \
    s/$LBP_IP_FIRST_TWO_OCTETS/$PROJECT_IP_FIRST_TWO_OCTETS/g; \
    s/$LBP_PORT_HTTP/$PROJECT_PORT_HTTP/g; \
    s/$LBP_PORT_VITE/$PROJECT_PORT_VITE/g; \
    s/$LBP_PORT_DB/$PROJECT_PORT_DB/g; \
    " \
    README.md docker-compose.yml composer.json .circleci/config.yml .github/workflows/ci.yml .env.example .env.testing vite.config.js
