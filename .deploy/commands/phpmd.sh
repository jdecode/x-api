#!/bin/bash
# Laravel boilerplate githook script

# PHP Mess Detector

if [[ $CIRCLECI == true ]]
then
    composer run phpmd
else
    docker exec laravel-boilerplate composer run phpmd
fi

RESULT=$?
[[ $RESULT -eq 0 ]] &&
echo -e "*************************\n\t*  PHP-MD check passed  *\n\t*************************"

exit $RESULT