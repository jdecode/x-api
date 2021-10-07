#!/bin/bash
# Laravel boilerplate githook script

# PHP CodeSniffer

if [[ $CIRCLECI == true ]]
then
    composer run phpcs
else
    docker exec laravel-api composer run phpcs
fi

RESULT=$?
[[ $RESULT -eq 0 ]] &&
echo -e "\e[32m\n\t*************************\n\t*  PHP-CS check passed  *\n\t*************************\e[m\n\n"

exit $RESULT
