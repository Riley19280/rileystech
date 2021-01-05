#!/bin/bash

echo "start in docker"

if [ "$1" = "dev" ]; then

  parentdir=$(dirname $(dirname "$PWD"))
  echo $parentdir
  docker build -f ./docker/dev/Dockerfile --rm -t local/rileystech .

  if [ "$2" = "run" ]; then
    docker kill rileystech
    docker run -d --rm --privileged -p 81:80 -p 444:443 -p 9000 --name rileystech -v $parentdir:/var/www/html/app local/rileystech
  else
    echo "Valid options are 'run'"
  fi

elif [ "$1" = "prod" ]; then

  docker build -f ./docker/prod/Dockerfile --rm -t local/rileystech -t 025221494343.dkr.ecr.us-east-1.amazonaws.com/rileystech:rileystech .

  if [ "$2" = "run" ]; then
    docker kill rileystech
    docker run --rm --privileged --network proxynet --ip 172.30.0.11 --name rileystech local/rileystech
  elif [ "$2" = "push" ]; then
    $(aws ecr get-login --no-include-email)
    docker push 025221494343.dkr.ecr.us-east-1.amazonaws.com/rileystech:rileystech
  else
    echo "Valid options are 'run' or 'push'"
  fi

else
  echo "Specify 'prod' or 'dev' environment"
fi