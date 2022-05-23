# Laravel stater kit

<hr />

## How to use

Click on Use this template button then follow normal project creation steps in git

Once project is created, clone to your system

    cp .env.example .env
    composer install
    npm install && npm run dev
    php artisan key:generate
    php artisan migrate:fresh --seed
    php artisan serve

## Docker

```
cp .env.example .env
docker run --rm -v $(pwd):/opt -w /opt laravelsail/php81-composer:latest composer install
./vendor/bin/sail up -d
./vendor/bin/sail artisan key:generate
./vendor/bin/sail artisan migrate:fresh --seed
```

# TODO

    - WYSIWYG Editor for blog content

## Made with

    - Laravel 9.x
    - larave/ui package
    - Webkit Admin template
    - Spatie Permissions
    - barryvdh/laravel-ide-helper

## Screenshots

### Dashboard

![profile](https://raw.githubusercontent.com/innowaysit/laravel-stater-kit/main/public/screenshots/00.png)

### Profile

![profile](https://raw.githubusercontent.com/innowaysit/laravel-stater-kit/main/public/screenshots/02.png)

### Edit Profile

![profile](https://raw.githubusercontent.com/innowaysit/laravel-stater-kit/main/public/screenshots/01.png)

### Edit User with role

![profile](https://raw.githubusercontent.com/innowaysit/laravel-stater-kit/main/public/screenshots/03.png)

### Role list

![profile](https://raw.githubusercontent.com/innowaysit/laravel-stater-kit/main/public/screenshots/04.png)

### Role edit

![profile](https://raw.githubusercontent.com/innowaysit/laravel-stater-kit/main/public/screenshots/05.png)
