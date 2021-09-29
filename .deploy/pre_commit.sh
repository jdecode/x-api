#!/bin/bash
# Basic pre-commit script
EXIT_CODE=0

chmod +x ./.deploy/commands/*.sh

# Security Checker
./.deploy/commands/security_checker.sh || EXIT_CODE=1

# PHP CodeSniffer
./.deploy/commands/phpcs.sh || EXIT_CODE=1

# PHP Mess Detector
./.deploy/commands/phpmd.sh || EXIT_CODE=1

#PHP parallel-lint
./.deploy/commands/parallel_lint.sh || EXIT_CODE=1

[ $EXIT_CODE -ne 0 ] &&
echo -e "\e[31m\n\t************************************************\n\t*  PRE-COMMIT HOOK FAILED (see reasons above)  *\n\t************************************************\e[m" ||
echo -e "\e[32m\n\t*********************************************\n\t*  PRE-COMMIT HOOK PASSED, Ready for Push  *\n\t*********************************************\e[m"
exit $EXIT_CODE
