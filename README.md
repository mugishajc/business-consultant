# Business Consultant

A Laravel web platform that connects people with counsellors. Clients ask questions by category, counsellors answer them, and an administrator manages users, counsellors and categories.

## Features

- Public landing page (`Ahabanza`) with sign-up for clients and for counsellors.
- **Clients**: ask a question in a category, see their posts and the counsellor's replies, and manage their profile.
- **Counsellors**: an inbox of client questions (`Ubutumwa`) and a reply thread per client.
- **Admin dashboard**: add counsellors and clients, manage users and question categories.
- Authentication with Laravel UI.

## Stack

- PHP 7.2+/8, Laravel 7, MySQL
- Laravel UI (Bootstrap), Laravel Mix

## Setup

```bash
composer install
npm install && npm run dev
cp .env.example .env
php artisan key:generate
# set DB_* in .env
php artisan migrate
php artisan serve
```
