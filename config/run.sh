#!/bin/bash
cd ./code && composer config github-oauth.github.com $GITHUB_KEY
composer install
php bin/console d:s:u -f --
cat .env.prod.local
echo $GITHUB_KEY
/usr/bin/supervisord -c /etc/supervisord.conf
