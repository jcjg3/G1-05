
#!/bin/bash
composer install
composer require maddhatter/laravel-fullcalendar
cp .env.example .env
touch database/database.sqlite
php artisan migrate:install
