#!/bin/bash
# Ejecutar migraciones de base de datos y seeders (si los tienes configurados)
php artisan migrate --force

# Iniciar el servidor en el puerto asignado por Railway
php artisan serve --host=0.0.0.0 --port=${PORT:-8000}
