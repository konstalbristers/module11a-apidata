Overview

this project shows how to read and display json data in a laravel app it uses a static json file to act like api data and shows the results in a blade view

Features

it reads weather data from a json file turns it into a php array with json\_decode and shows it in a html table rainy days can be highlighted with a simple condition

Setup

install laravel clone or make the project and add a file called weather.json inside storage/app the file has some sample weather data in json format

How It Works

the controller reads the json file with laravel storage decodes it and sends the data to a blade view the view loops through it with @foreach to build the table

Running the Project

start the laravel server with php artisan serve and open [http://127.0.0.1:8000/weather](http://127.0.0.1:8000/weather) in your browser to see the forecast

Learning Goals

you learn how to use json with laravel turn data into php arrays and display it using blade templates

