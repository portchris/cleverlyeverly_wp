#!/usr/bin/env bash

$SHELL_USER='root';

if [ -f ./.env ]; then
	source ./.env
else
	echo "Error: no environment variable file ./.env found!"
fi

if [[ $* == *-u* ]]; then
	SHELL_USER=$USER;
fi

if [[ $SHELL_USER == "root" ]]; then
	read -p "Shell in as ${USER}? [Y/y]? " -n 1 -r
	echo # (optional) move to a new line
	if [[ $REPLY =~ ^[Yy]$ ]]; then
		SHELL_USER=$USER;
	fi
fi

docker-compose exec -u $SHELL_USER ce_app bash -c "cd /home/${USER}/src/; exec '${SHELL:-sh}'"
