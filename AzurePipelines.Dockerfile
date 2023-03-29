FROM jdecode/xdev:php-npx

WORKDIR /var/www/html

COPY . /var/www/html

RUN composer install -n --prefer-dist

RUN composer run deployer

#RUN chmod +x /var/www/html/deployer
#
#ENTRYPOINT ["/var/www/html/deployer"]
