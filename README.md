<h1>After clonning project run these commands:</h1>

# cd project-directory
# composer install
# cp .env.example .env
# php artisan key:generate
# php artisan storage:link


(Go to .env file and change like that:
DB_DATABASE=ecommerce
DB_USERNAME=root
DB_PASSWORD=
)

(Start xampp and go to phpMyAdmin and create a database named ecommerce)

# php artisan migrate
# npm install
# npm run dev

(Open another terminal and then run)
# php arsian serve

(For admin dashboard. Create a user and then go to database and go to users table and change userType to 1).
(For user login. Create a user just and let the userType to 0)
(This is my first laravel project. So I didn't learn the user role.)
