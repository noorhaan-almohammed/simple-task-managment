#!/usr/bin/env bash
cd /opt/render/project/src

# Install dependencies
composer install --no-interaction --no-dev --prefer-dist --optimize-autoloader

# Setup .env if not exists
if [ ! -f ".env" ]; then
    cp .env.example .env
    php artisan key:generate
fi

# Database setup
php artisan migrate --force

# Optimize
php artisan cache:clear
php artisan config:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache
