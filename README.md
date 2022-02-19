<p align="center"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# SYA BANK SYSTEM

## Features

1. Client User
   a. Login and Logout
   b. View and update his account details
   c. View his transactions history
   d. Transfer money to others

2. Admin User
   a. Login and logout
   b. Create new client account
   c. Update existing client information
   d. View searchable and sortable list of clients

## Tech

Sya bank uses a number of open source projects to work properly:

- [Laravel] - PHP enhanced for web apps!
- [Bootstrap] - great UI boilerplate for modern web apps
- [AWS Elestic Beanstalk] - the streaming build system
- [jquery] - any related to function
- [github] - control version

## Installation

Laravel requires php 8 to run.

Clone project from git repo.

```sh
git clone https://github.com/shahidaothman/laravel_test.git
```

Access the folder...

```sh
cd laravel_test
```

Create enviroment

```sh
touch .env
cp .env.example .env
php artisan key:generate
php artisan config:cache
```

Run project

```sh
php artisan serve
```

## Snapshots
