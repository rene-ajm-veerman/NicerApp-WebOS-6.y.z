#!/bin/bash
sudo rm -rf /var/cache/apache2/*

sudo mkdir -p /var/cache/apache2/mod_cache_disk
sudo chown -R www-data:www-data /var/cache/apache2
sudo chmod -R 755 /var/cache/apache2

sudo systemctl restart apache2

:# Example for the usual location
sudo find /var/cache/nginx -type f -delete
sudo find /var/cache/nginx -type d -empty -delete

sudo chown -R www-data:www-data /var/cache/nginx
sudo chmod -R 755 /var/cache/nginx

sudo nginx -t && sudo systemctl reload nginx

