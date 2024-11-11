#!/bin/bash
# Iniciar el worker de Laravel
php artisan queue:work --tries=3
