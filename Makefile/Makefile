.PHONY: mysql dump import

MYSQL_CONTAINER_NAME = stronghold-mysql
PHP_CONTAINER_NAME = stronghold-php
NGINX_CONTAINER_NAME = stronghold-nginx
DB_NAME = stronghold
MYSQL_USER = root
MYSQL_PASS = root

EXEC_MYSQL = docker exec -it $(MYSQL_CONTAINER_NAME) bash
EXEC_PHP = docker exec -it $(PHP_CONTAINER_NAME) bash
EXEC_NGINX = docker exec -it $(NGINX_CONTAINER_NAME) bash

mysql_container:
	$(EXEC_MYSQL)

dump:
	mysqldump -u $(MYSQL_USER) -p$(MYSQL_PASS) $(DB_NAME) > dump/new_dump.sql

import:
	mysql -u $(MYSQL_USER) -p$(MYSQL_PASS) $(DB_NAME) < ../dump/new_dump.sql

php_container:
	$(EXEC_PHP)

nginx_container:
	$(EXEC_NGINX)
