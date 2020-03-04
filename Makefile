t:
	@echo "Running phpunit"
	vendor/bin/phpunit

tf:
	@echo "Running phpunit for ${name}"
	vendor/bin/phpunit --filter ${name}