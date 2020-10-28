###
# WPCACHEHOME
# If necessary change de wp-super-cache variable, set this value to it: /var/www/html/wp-content/plugins/wp-super-cache/
###
FROM wordpress:4.9.8-apache

COPY . /var/www/html/

RUN chown -R www-data:www-data /var/www/html/