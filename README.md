# Laravel Product Shopping



[Documentation Link- ChatGPT](https://chatgpt.com/share/682c3f05-3a14-8004-9a92-4983891c397f)

[My Site](https://mykinde.github.io/site/)



## About Repository

A very simple Laravel 12 + Bootstrap 5 + Mobile First CSS Styling Application.
<p align="center">
<img src="https://i.imgur.com/111111mZAHbUL.png">

</p>

## Tech Specification

- Laravel 12
- Bootstrap
- Laravel Breeze
- Bootstrap 5 + Font Awesome 5
- PHPUnit Test Case/Test Coverage
- Mobile First CSS Styling + AI

## Features

- Modal based Create+Edit, List with Pagination, Delete with Sweetalert
- Login, Register, Forget+Reset Password as default auth
- Profile, Update Profile, Change Password, Avatar
- Product Management 
- User Management
- Settings: Categories, Tags
- Frontend and Backend User ACL with Gate Policy (type: admin/user)
- Simple Static Dashboard
- Developer Options for OAuth Clients and Personal Access Token
- Build with Docker

## Installation

- `git clone https://github.com/mykinde/week1.git`
- `cd laravel-starter/`
- `composer install`
- `cp .env.example .env`
- Update `.env` and set your database credentials
- `php artisan key:generate`
- `php artisan migrate`
- `php artisan db:seed`
- `php artisan passport:install`
- `npm install`
- `npm run dev`
- `php artisan serve`

## Install with Docker

- `docker-compose up -d`
- `docker exec -it vue-starter /bin/bash`
- `composer install`
- `cp .env.example .env`
- `php artisan key:generate`
- `php artisan migrate`
- `php artisan db:seed`
- `php artisan passport:install`
- Application http://localhost:8000/
- Adminer for Database http://localhost:8000/
- DBhost: yourIP:3307, user: root, Password: password


## Unit Test

#### run PHPUnit

```bash
# run PHPUnit all test cases
vendor/bin/phpunit
# or Feature test only
vendor/bin/phpunit --testsuite Feature
```



## Installation 
Make sure that you have setup the environment properly. You will need minimum PHP 8.2, MySQL/MariaDB, and composer.

1. Download the project (or clone using GIT)
2. Copy `.env.example` into `.env` and configure your database credentials
3. Go to the project's root directory using terminal window/command prompt
4. Run `composer install`
5. Set the application key by running `php artisan key:generate --ansi`
6. Run migrations `php artisan migrate`
7. Start local server by executing `php artisan serve`
8. Visit here [http://127.0.0.1:8000/prOJECT](http://127.0.0.1:8000/products) to test the application
## mykinde
for full package and demo contact g3send@gmail.com

## Credit
This repository is motivated by [mykinde/laravStart](https://github.com/mykinde/week1.git) and his awesome video tutorial in [Youtube](https://www.youtube.com/playlist?list=PLE6CJ8yYNo7LvHjVBWX0fjeb5A7nWimzj).

## License

[MIT license](https://opensource.org/licenses/MIT).