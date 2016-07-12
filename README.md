# laravel_base

Install from scratch:

1. install the generic build for laravel:
	composer create-project --prefer-dist laravel/laravel base_web

2. Create Auth files & routes:
	cd base_web/
	php artisan make:auth
-- this creates resources/views/layouts/app.blade.php which serves as the layout view

3. Make sure DB server/user match credentials in .env

4. Migrate the database:
	php artisan migrate

5. serve up the server:
	php artisan serve

