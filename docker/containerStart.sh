#!/usr/bin/env bash

service apache2 restart
chown -R www-data /var/www/html

/bin/bash
tail -f /dev/null