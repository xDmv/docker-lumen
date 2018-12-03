SHELL  := /bin/bash

restart: kill up status

kill:
	docker-compose kill && docker-compose rm -vf

up:
	docker-compose up -d

status:
	docker-compose ps

logs:
	docker-compose logs -f

pull:
	docker-compose pull

nginx-conf-reload:
	docker-compose exec nginx bash -c 'nginx -t && nginx -s reload'

stop:
	docker-compose stop

up1:
	docker-compose up -d --build

php-docker:
	docker exec -i -t mylumen-docker_workspace_1 /bin/bash
