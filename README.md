# SaveFood
Hello there ! This is my end of studies project. It's a web application that connects customers to restaurants and stores that have unsold food surplus.</br>
This application will help restaurants and stores owners sell their unsold food surplus and will help customers get daily fresh food with the best prices.</br>
All this in order to help our planet get better !

## How to install SaveFood

In the terminal, run :
```
git clone https://github.com/Radad-J/SaveFood.git
```
Then :
```
php composer.phar install
```
In the root directory, make sure to rename the ".env.example" file to ".env"
Then, generate an encryption app key
```
php artisan key:generate
```
Create a database named "savefood" in your PhpMyAdmin dashboard or MySQL CLI.
```
CLI Query :
CREATE DATABASE savefood;
```
Next, configure the database. It should be something similar to this :
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=savefood
DB_USERNAME=root
DB_PASSWORD=root
```
When that's done, run the migrations in your terminal :
```
php artisan migrate
```
Then run the seeders :
```
php artisan db:seed
```

To run the project in the local server :
```
php artisan serve
```

You're all set !

## Licenses
DevsToHire is an application licensed under the [MIT license](https://opensource.org/licenses/MIT).
