



## Usage <br>
Please setup your coding environment <br>
```
gh repo clone amirtheshprasad/patient-blood-management-app
cd patient-blood-management-app
composer install
cp .env.example .env 
php artisan key:generate
php artisan cache:clear && php artisan config:clear 
php artisan serve 
```


## Database Setup <br>
Please make sure that your database credentials are up and running.
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=patient_blood_management_app
DB_USERNAME=root
DB_PASSWORD=
```
Please create the database which will be grabbed from the ```DB_DATABASE``` environment variable.
```
mysql;
create database patient_blood_management_app;
exit;
```

Finally, please make sure that you migrate your migrations.
```
php artisan migrate
```

## Running tests

Please use the following command to run the test.

```

php artisan test

``` 
Please use the following commands to run the dusk tests. You need to open two terminals and first execute the following command in the first terminal.

```

php artisan serv

``` 
Please execute the following command in the second terminal

```

php artisan dusk

``` 






