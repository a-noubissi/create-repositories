#!/bin/bash
composer install
php bin/console d:s:u -f --complete
/usr/bin/supervisord -c /etc/supervisord.conf
