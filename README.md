<h1>After clonning project run these commands:</h1>

cd project-directory
# composer install
# php artisan key:generate
# php artisan storage:link
# cp .env.example .env

(Go to .env file and change like that:
DB_DATABASE=ecommerce
DB_USERNAME=root
DB_PASSWORD=
)

(Start xampp and go to phpMyAdmin and create a database named ecommerce)

# php artisan migrate
# php artisan Serve
