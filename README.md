# TFA5 Laravel POS Foundations

A complete four-page Laravel application for IT0049 TFA5. It includes a landing page, About page, Customer Accounts page, and User Accounts page. Customer and user data use static PHP arrays as required.

## Requirements

- PHP 8.2 or newer
- Composer 2

## First-time setup

Open a terminal in this project folder and run:

```bash
composer install
```

Create the environment file:

**Windows Command Prompt:**
```bat
copy .env.example .env
```

**macOS, Linux, or Git Bash:**
```bash
cp .env.example .env
```

Generate the application key:

```bash
php artisan key:generate
```

Start Laravel:

```bash
php artisan serve
```

Open `http://127.0.0.1:8000`.

## Pages

- `/` - landing page
- `/about` - about page
- `/customers` - five customer records
- `/users` - five user records

## Activity requirements covered

- Fresh Laravel project structure
- Four named routes in `routes/web.php`
- `PageController`, `CustomerController`, and `UserController`
- Five static records in each account controller
- Four Blade views plus a shared layout
- `@foreach` in customer and user tables
- Navigation between all pages
- Responsive CSS without Node.js or Vite setup

## Database

No database is required. TFA5 explicitly requires static PHP arrays as temporary data sources.

## Useful checks

```bash
php artisan route:list
php artisan serve
```

## GitHub

Do not commit `.env` or `vendor`. Commit `.env.example`, all application source files, and this README. Anyone cloning the repository should run `composer install` before `php artisan serve`.
