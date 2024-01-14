#!/bin/sh
# chmod u+x yourscript.name (command to give script permission if you can't run the script )

#base path or directory for the project
BASE_PATH="$(dirname "$0")/.."

echo "\n Setting up Project...\n"
echo "\n Clearing Cache... \n"
php artisan clear
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear

echo "\n Installing Dependenceis...\n"
composer install --no-interaction
#npm install (if you are using npm)

#create .env if it's not existing
if [ -f "$BASE_PATH/.env" ]
then
    echo "\ .env file already exists. \n"
else
    echo "\Creating .env file. \n"
    cp .env.example .env
fi
