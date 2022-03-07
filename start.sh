#!/usr/bin/env bash

if [ -f ./.env ]; then
	source ./.env
else
	echo "Error: no environment variable file ./.env found!"
fi

if [ -z ${USER_ID+x} ]; then
	USER_ID=$(id -u)
fi

if [ -z ${GROUP_ID+x} ]; then
	GROUP_ID=$(id -g)
fi

docker-compose up -d --remove-orphans

# install Face & Figure Salon
# docker-compose exec -u ${USER} ce_app npm --prefix /home/${USER}/src/ install

# Build Face & Figure Salon
# docker-compose exec -u ${USER} ce_app npm --prefix /home/${USER}/src/ run build

# Export Face & Figure Salon
# docker-compose exec -u ${USER} ce_app npm --prefix /home/${USER}/src/ run export
