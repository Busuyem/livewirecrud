How to Run project locally:

1)run  composer install/update
2) run cp .env.example .env
3) Create a database and name it livewirecrud and update your .env file with it
4) run php artisan migrate
5) run php artisan db:seed
6) run php artisan serve