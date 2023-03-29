FROM jdecode/xdev:php-npx

WORKDIR /var/www/html

COPY ./index.php /var/www/html/index.php

#RUN composer install -n --prefer-dist

#RUN composer run deployer

#RUN chmod +x /var/www/html/deployer
#
#ENTRYPOINT ["/var/www/html/deployer"]
