#!/bin/bash
# Instalar las dependencias de PHP usando Composer
composer install --optimize-autoloader --no-dev

# Generar archivos de caché de configuración y rutas
php artisan config:cache
php artisan route:cache

# Crear el enlace simbólico para el almacenamiento público
php artisan storage:link

# Instalar dependencias de frontend y compilar si usas Laravel Mix o Vite (opcional)
npm install && npm run build
