SHELL  := /bin/bash

init: up
	git submodule init && git submodule update

restart: kill up status

kill:
	docker-compose kill && docker-compose rm -vf

up:
	docker-compose up -d --build

status:
	docker-compose ps

logs:
	docker-compose logs -f

pull:
	docker-compose pull

nginx-conf-reload:
	docker-compose exec nginx bash -c 'nginx -t && nginx -s reload'
