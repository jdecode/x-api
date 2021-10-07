#!/bin/bash
# Laravel boilerplate githook script

# Enlightn Security Checker

if [[ $CIRCLECI == true ]]
then
    composer run security-checker
else
    docker exec laravel-api composer run security-checker
fi

RESULT=$?
[[ $RESULT -eq 0 ]] &&
echo -e "\e[32m\n\t*********************************\n\t*  Security-Checker passed  *\n\t*********************************\e[m\n\n"

exit $RESULT
