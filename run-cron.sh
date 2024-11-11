#!/bin/bash
# Ejecutar las tareas programadas de Laravel en bucle infinito
while [ true ]
do
  php artisan schedule:run --verbose --no-interaction
  sleep 60
done
