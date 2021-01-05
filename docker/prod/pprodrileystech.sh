#!/usr/bin/env bash

printf "Killing previous rileystech\n"
docker kill rileystech

cd ../..
docker build -f ./docker/prod/Dockerfile --rm -t local/rileystech -t 025221494343.dkr.ecr.us-east-1.amazonaws.com/rileystech:rileystech .
docker run --rm --privileged --network proxynet --ip 172.30.0.11 --name rileystech local/rileystech
docker push 025221494343.dkr.ecr.us-east-1.amazonaws.com/rileystech:rileystech
cd docker/prod
