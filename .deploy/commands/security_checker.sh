#!/bin/bash
# Laravel boilerplate githook script

# Enlightn Security Checker

if [[ $CIRCLECI == true ]]
then
    composer run security-checker
else
    docker exec xdev-web composer run security-checker
fi

RESULT=$?
[[ $RESULT -eq 0 ]] &&
echo -e "\e[32m\n\t*********************************\n\t*  Security-Checker passed  *\n\t*********************************\n\n"

exit $RESULT
