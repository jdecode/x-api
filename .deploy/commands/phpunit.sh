#!/bin/bash
# Laravel boilerplate githook script

EXIT_CODE=0

# PHPUnit

if [[ $CIRCLECI == true ]]
then
   composer run phpunit
else
    docker exec laravel-api composer run phpunit
fi
RESULT=$?
[[ $RESULT -eq 0 ]] &&
echo -e "\e[32m\n\t*************************\n\t*  PHP-Unit check passed  *\n\t*************************\e[m\n\n"

exit $RESULT
