# Introduction

Fashion is a laravel website. it is an e-commerce website from where people can buy products online.

admin Monitors the activity of the users and checks the transactions.

## Installation

Install all the dependencies using composer

```bash
composer install
```
Install all the dependencies using composer
```bash
composer install
```
Copy the example env file and make the required configuration changes in the .env file
```bash
cp .env.example .env
```
Generate a new application key
```bash
php artisan key:generate
```
Run the database migrations (Set the database connection in .env before migrating)
```bash
php artisan migrate
```
Run the database seeder and you're done
```bash
php artisan db:seed
php artisan storage:link
```
Start the local development server
```bash
php artisan serve
```
You can now access the server at http://localhost:8000

