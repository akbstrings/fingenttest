

##  Laravel Project


a) Clone the project from https://github.com/akbstrings/fingenttest.git

b) Go to the folder application using cd command on your cmd or terminal

c) Run "composer install" on your cmd or terminal

d) Copy ".env.example" file to .env (create new file) on the root folder. You can type copy .env.example .env if using command prompt Windows or cp .env.example .env if using terminal, Ubuntu

e) Open your .env file and change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration.

f) Run "php artisan key:generate"

g) Run "php artisan serve" to run the project on browser

## DB SQL FILE in root folder - fingenttest.sql

##  To Test

API URL

http://127.0.0.1:8000/api/fingent/getusers


## To edit configurable value x

Go to routes/api.php

//1 = 60 Seconds
//0.5 = 30 seconds.
//0.0167 = 1 second.

## //To make 5 requests per second change to "throttle:5,0.0167"

## Demo 1 request per second

Route::group(['prefix' => 'fingent','middleware' => ["throttle:1,0.0167"]],function ()
{

Route::get('/getusers', 'Api\UserApiController@GetUsers');

});
