#!/bin/bash
# Laravel boilerplate githook script

# PHP Mess Detector

if [[ $CIRCLECI == true ]]
then
    composer run phpmd
else
    docker exec laravel-api composer run phpmd
fi

RESULT=$?
[[ $RESULT -eq 0 ]] &&
echo -e "\e[32m\n\t*************************\n\t*  PHP-MD check passed  *\n\t*************************\e[m\n\n"

exit $RESULT
