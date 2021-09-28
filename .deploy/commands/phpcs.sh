#!/bin/bash
# Laravel boilerplate githook script

# PHP CodeSniffer

if [[ $CIRCLECI == true ]]
then
    composer run phpcs
else
    docker exec laravel-boilerplate composer run phpcs
fi

RESULT=$?
[[ $RESULT -eq 0 ]] &&
echo -e "*************************\n\t*  PHP-CS check passed  *\n\t*************************"

exit $RESULT
