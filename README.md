10) README.md template (use this in your repo)
# Laravel Landing + CRUD Assignment

## Overview
Convert a Figma landing page into a responsive Laravel webpage with a contact form that stores leads into MySQL and a simple CRUD dashboard. Also provides REST APIs.

## Setup
1. Clone repo
```bash
git clone <your-repo-url>
cd project
composer install
cp .env.example .env
php artisan key:generate


Configure .env database settings.

Run migrations:

php artisan migrate


Serve:

php artisan serve

Database

leads table:

id

name

business_name

email

phone

message

timestamps

deleted_at (soft deletes)

Routes

Web:

GET / — Landing page with form

POST /lead — Submit lead form

GET /dashboard — Leads list (CRUD)

GET /dashboard/{id}/edit — Edit lead

PUT /dashboard/{id} — Update lead

DELETE /dashboard/{id} — Delete lead

API:

GET /api/leads — list

POST /api/leads — create

GET /api/leads/{id} — show

PUT /api/leads/{id} — update

DELETE /api/leads/{id} — delete