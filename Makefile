php-container = simple-blog-php

.PHONY: up
up:
		docker-compose -f docker/docker-compose.yml up -d

.PHONY: down
down:
		docker-compose -f docker/docker-compose.yml down

.PHONY: composer-install
composer-install:
		docker exec -it $(php-container) composer install

.PHONY: deptrac
deptrac:
		docker exec -it $(php-container) vendor/bin/deptrac