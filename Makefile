SHELL  := /bin/bash

init: up
	git submodule init && git submodule update

restart: kill up status

kill:
	docker-compose kill && docker-compose rm -vf

up:
	docker-compose up -d --remove-orphans

status:
	docker-compose ps

logs:
	docker-compose logs -f

pull:
	docker-compose pull

nginx-conf-reload:
	docker-compose exec nginx bash -c 'nginx -t && nginx -s reload'

php-bash:
	docker-compose exec php bash

supervisor-cli:
	docker-compose exec php supervisorctl

redis-cli:
	docker-compose exec redis redis-cli

mysql-cli:
	docker exec -it `docker-compose ps -q mysql` bash -c 'export MYSQL_PWD=$$MYSQL_ROOT_PASSWORD; mysql -uroot'

mysql-dump:
	docker exec -i `docker-compose ps -q mysql` bash -c 'export MYSQL_PWD=$$MYSQL_ROOT_PASSWORD; mysqldump --force --opt --comments=false --quote-names --single_transaction --routines --events -uroot -h mysql $$MYSQL_DATABASE' | gzip -c > dump.sql.gz

mysql-import:
	gzip -dc dump.sql.gz | docker exec -i `docker-compose ps -q mysql` bash -c 'export MYSQL_PWD=$$MYSQL_ROOT_PASSWORD; mysql -uroot -h mysql $$MYSQL_DATABASE'
