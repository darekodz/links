## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

## About this project

Based on [this](https://laravel-news.com/your-first-laravel-application) tutorial I created a basic page with a possibility to add items (url links) into the DB. On the main page there is a list of the links. 

## Installation

1. Install some local web server with a php and mysql e.g. [xampp](https://www.apachefriends.org/pl/index.html). 
2. Clone this repo
3. Change data in .env - e.g. db name and credentials
4. Set "DocumentRoot" of your server to the public directory of the project
5. Execute "composer install" in the terminal
6. Execute "php artisan migrate --seed" - it will create db structure and fill the test data
7. Done -> go to your local server url
