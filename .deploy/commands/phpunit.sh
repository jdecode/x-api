#!/bin/bash
# Laravel boilerplate githook script

EXIT_CODE=0

# PHPUnit

if [[ $CIRCLECI == true ]]
then
   composer run phpunit
else
    docker exec laravel-boilerplate composer run phpunit
fi
