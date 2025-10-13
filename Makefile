
build:
	docker build --tag "friends-of-vertex-cards/api-client" .docker

check:
	docker run --rm -v ./:/var/app friends-of-vertex-cards/api-client composer check

cs-fix:
	docker run --rm -v ./:/var/app friends-of-vertex-cards/api-client composer cs-fix