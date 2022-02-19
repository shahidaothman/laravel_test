![image info](public/assets/images/logo-light.png)

# SYA BANK SYSTEM

## Features

1. Client User

- Login and Logout
- View and update his account details
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

![image info](public/assets/images/snapshorts/homepage.png)

# client

![image info](public/assets/images/snapshorts/client_home.png)

![image info](public/assets/images/snapshorts/client_transfer.png)
![image info](public/assets/images/snapshorts/client_transfer_detail.png)
![image info](public/assets/images/snapshorts/client_edit_profile.png)
![image info](public/assets/images/snapshorts/client_edit_success.png)
![image info](public/assets/images/snapshorts/client_history.png)
![image info](public/assets/images/snapshorts/client_profile.png)
![image info](public/assets/images/snapshorts/client_save_history.png)
![image info](public/assets/images/snapshorts/client_success_transfer.png)
![image info](public/assets/images/snapshorts/client_transfer_detail.png)

![image info](public/assets/images/snapshorts/admin_view.png)

![image info](public/assets/images/snapshorts/homepage.png)
