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

## Docker (Sail)

```
cp .env.example .env
docker run --rm -v $(pwd):/opt -w /opt laravelsail/php81-composer:latest composer install
./vendor/bin/sail up -d
./vendor/bin/sail artisan key:generate
./vendor/bin/sail artisan migrate:fresh --seed
```

### Passport Api installation and configuring client id and secret

If you need the api for authentication run the below command

```
php artisan passport:install
```

This will give sample output
e.g.

```
Personal access client created successfully.
Client ID: 1
Client secret: idYopC1DiScLLkjXN7tPh8Wu3QxfViME6nJJurtd
Password grant client created successfully.
Client ID: 2
Client secret: qIiqHzXu58g7DQl8fKiSTFKRFcMzD0napwYi2W6l
```

Paste any one of these keys in your .env file as below

```
PASSPORT_PERSONAL_ACCESS_CLIENT_ID=1
PASSPORT_PERSONAL_ACCESS_CLIENT_SECRET="idYopC1DiScLLkjXN7tPh8Wu3QxfViME6nJJurtd"
```

# TODO

    - Multiple theme support
    - API support

## Made with

    - Laravel 10.x
    - larave/ui package
    - Webkit Admin template
    - spatie/laravel-permission
    - barryvdh/laravel-ide-helper
    - laravel-shift/blueprint
    - Font Awesome 5 icons
    - Mazer 2.0 Admin template

## Screenshots

### New Bs5 based Stunning Mazer 2.0 Admin theme

### Light Mode

![theme](public/screenshots/07.png)

### Dark Mode

![dark_theme](public/screenshots/08.png)

### Home

![home](public/screenshots/00.png)

### Login

![login](public/screenshots/01.png)

### Register

![register](public/screenshots/02.png)

### Home

![home](public/screenshots/03.png)

### Dashboard

![dashboard](public/screenshots/04.png)

### Role management

![role_management](public/screenshots/05.png)

### Profile

![profile](public/screenshots/06.png)

## Credits

[Laravel](https://laravel.com/) Framework 10.x

Theme: Bootstrap 5 based [Mazer 2.0](https://github.com/zuramai/mazer)

Role management: [Spatie Laravel Permissions](https://github.com/spatie/laravel-permission)

## License

The MIT License (MIT). Please see [License](#license) File for more information.
