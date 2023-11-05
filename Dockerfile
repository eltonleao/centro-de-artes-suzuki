FROM wordpress
RUN chown -R www-data:www-data /var/www/html
WORKDIR /var/www/html/
RUN chmod 777 wp-content