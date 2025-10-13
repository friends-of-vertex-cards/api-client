
build:
	docker build --tag "friends-of-vertex-cards/api-client" .docker

check:
	docker run --rm -v ./:/var/app friends-of-vertex-cards/api-client sh -c "composer install && composer check"

cs-fix:
	docker run --rm -v ./:/var/app friends-of-vertex-cards/api-client sh -c "composer install && composer cs-fix"