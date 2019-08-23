# Laravel-Vue-EPA

This repository uses Laravel, Vue-CLI, and the OneEPA template alongside the US Web Design System (USWDS). 

* Laravel is used for an API against a MySQL database (easily configurable to Postgres or another database)
* Vue-CLI is used for a front-end SPA which includes routing via Vue Router and state management via Vuex
* The development environment makes use of two local servers - one to host the  Laravel API via Laragon (or another local PHP-based server), and one to host the Vue front-end via NodeJS
* The development environment enables CORS so the Vue server can successfully call the Laravel API
* The production build enables Laravel to host both the API and front-end, so only one PHP-based server is required for hosting 

## Pre-requisites

* Laragon or another local LAMP/LAPP/LEMP/LEPP server
  * If installing Laragon, make sure to at least include PHP and MySQL
* Composer
* NodeJS
* npm or yarn

## To set up dev environment:

1. Clone this directory inside laragon/www (or your local server's file directory)
	* `git clone https://github.com/dpgalloway/laravel-vue-cli new-app`
3. Run `composer install` in the server directory
4. Run `npm install` in the client directory
5. Connect to your local MySQL server (Laragon comes with HeidiSQL for a MySQL GUI)
6. Create a new database
7. Copy contents of `server/.env.example` to `server/.env`
8. Run `php artisan key:generate` to generate secret key, which is automatically added to `APP_KEY` in the .env file
9. Set `DB_DATABASE` to your new database name
10. Run `php artisan migrate` to migrate the example items table
11. Run `php artisan db:seed` to seed example items
12. Create a .env file in the client directory
13. Add a VUE_APP_API_URL variable and set to your local Laravel server URL (e.g., http://laravel.test, http://localhost:8000)
14. Run `npm start` to start the front-end development server

## To build for production:
1. Run `npm run build` in the client directory

This builds the Vue front-end into static HTML/JS/CSS files, which Laravel automatically serves. Laravel is set up to automatically use the page routes defined in Vue Router.

## Resources

* [Laragon Download](https://laragon.org/download/index.html)
* [Laravel Docs](https://laravel.com/docs/5.8)
* [Vue Docs](https://vuejs.org/v2/guide/)
* [US Web Design System Docs](https://designsystem.digital.gov/documentation/)
