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

Homepage layout

![image info](public/assets/images/snapshots/homepage.png)

# Client

Homepage for client. They can see their balance, account no, and any related details

![image info](public/assets/images/snapshots/client_home.png)

Client click on Pay/Transfer tab to make transcation. Client need to enter based on validation given.

![image info](public/assets/images/snapshots/client_transfer.png)

Receiver details will pop up
![image info](public/assets/images/snapshots/client_transfer_detail.png)

if transaction success, there will will outomated pop up show success.

![image info](public/assets/images/snapshots/client_success_transfer.png)

Next client click on history tab. all transaction will appear.
![image info](public/assets/images/snapshots/client_history.png)

Client can download and save the data.

![image info](public/assets/images/snapshots/client_save_history.png)

![image info](public/assets/images/snapshots/client_profile.png)
![image info](public/assets/images/snapshots/client_edit_profile.png)
![image info](public/assets/images/snapshots/client_edit_success.png)

# Admin

![image info](public/assets/images/snapshots/admin_view.png)

![image info](public/assets/images/snapshots/admin_edit.png)

![image info](public/assets/images/snapshots/admin_action.png)

![image info](public/assets/images/snapshots/admin_add.png)

![image info](public/assets/images/snapshots/admin_sort.png)
