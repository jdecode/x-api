#!/bin/bash

php artisan migrate --force

apache2-foreground

