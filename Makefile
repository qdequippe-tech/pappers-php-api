vendor/composer/installed.php: composer.lock
	composer install

vendor: vendor/composer/installed.php

cs: vendor ## Fix code style
	PHP_CS_FIXER_IGNORE_ENV=1 ./vendor/bin/php-cs-fixer fix

rector: vendor ## Run Rector
	./vendor/bin/rector

jane: vendor ## Generate the SDK
	./vendor/bin/jane-openapi generate --config-file=.jane-openapi.php

.PHONY: help

help: ## Display this help
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-20s\033[0m %s\n", $$1, $$2}'

.DEFAULT_GOAL := help
