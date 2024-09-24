### HOW TO RUN CODE? (by William Christian)

#### Requirements

-   php and omposer
-   xamnpp for my sql

#### STEPS

1. Configure the env files (create new new file in the root directory ".env")
2. Change the database configuration to suit yours (below is mine for example just change the part i copy below)

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=re-value
DB_USERNAME=root
DB_PASSWORD=password

3. on the terminal run "composer install"
4. on the terminal run "php artisan migrate"
5. on the terminal run "php artisan key:generate"
6. on the terminal run "php artisan serve"
7. Open the website based on the port in localhost

# KALAU ADA MASALAH CHAT GW AJA
