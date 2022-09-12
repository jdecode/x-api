#!/bin/bash

# Laravel Boilerplate [LBP] variables
LBP_REPO='fl-laravel_boilerplate'
LBP_API_SERVICE_NAME='laravel-api'
LBP_PG_SERVICE_NAME='laravel-pg'
LBP_TF_SERVICE_NAME='laravel-tf'
LBP_IP_FIRST_TWO_OCTETS='22.95'
LBP_PORT_HTTP='295'
LBP_PORT_VITE='296'
LBP_PORT_DB='297'

# Project variables: Please update these before running the script
PROJECT_REPO='project-api'
PROJECT_API_SERVICE_NAME="$PROJECT_REPO"
PROJECT_PG_SERVICE_NAME="project-pg"
PROJECT_TF_SERVICE_NAME="project-tf"
PROJECT_IP_FIRST_TWO_OCTETS='21.95'
PROJECT_PORT_HTTP='195'
PROJECT_PORT_VITE='196'
PROJECT_PORT_DB='197'

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
