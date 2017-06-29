
composer:
	composer install

yarn:
	yarn install

test:
	./vendor/bin/phpunit

install: composer yarn
