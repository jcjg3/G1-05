
#!/bin/bash
composer install
cp .env.example .env
touch database/database.sqlite
php artisan migrate:install
