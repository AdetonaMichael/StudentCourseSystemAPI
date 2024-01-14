#!/bin/sh
# chmod u+x yourscript.name (command to give script permission if you can't run the script )

echo "\n Resetting Project...\n"

echo "\n Clearing Cache... \n"
php artisan clear
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear

echo "\n Dropping/Recreating database"
php artisan migrate:fresh

echo "\n Done...! :) \n"
