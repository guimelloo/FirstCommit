# Nome dos containers
APP_CONTAINER=firstCommit
DB_CONTAINER=firstCommit_postgres

# Comandos básicos
up:
	docker compose up -d --build

down:
	docker compose down

restart:
	$(MAKE) down
	$(MAKE) up

logs:
	docker compose logs -f

# Artisan
artisan:
	docker exec -it $(APP_CONTAINER) php artisan $(filter-out $@,$(MAKECMDGOALS))

# Composer
composer:
	docker exec -it $(APP_CONTAINER) composer $(filter-out $@,$(MAKECMDGOALS))

# Migrations
migrate:
	$(MAKE) artisan migrate

migrate-fresh:
	$(MAKE) artisan migrate:fresh

seed:
	$(MAKE) artisan db:seed

# Bash do container
bash:
	docker exec -it $(APP_CONTAINER) bash

# Reset DB (cuidado!)
db-reset:
	docker exec -it $(DB_CONTAINER) psql -U firstCommit -d firstCommit -c "DROP SCHEMA public CASCADE; CREATE SCHEMA public;"
