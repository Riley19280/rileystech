#!/usr/bin/env bash


docker kill rileystech

echo "start in docker/dev"


parentdir=$(dirname $(dirname "$PWD"))
echo $parentdir

cd ../..
docker build -f ./docker/dev/Dockerfile --rm -t local/rileystech .


docker run -d --rm --privileged -p 81:80 -p 444:443 -p 9000 --name rileystech -v $parentdir:/var/www/html/app local/rileystech
#docker exec rileystech bash -c 'cd /var/www/html/app; exec php composer update'

cd docker/dev



