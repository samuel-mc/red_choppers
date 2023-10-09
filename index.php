<?php

require 'flight/Flight.php';

# Debug errors
Flight::set('flight.log_errors', true);
# Root route
define('__ROOT__', "http://localhost/red_choppers");
// define('__ROOT__', "http://localhost:5000/Trabajo/Freelancer/Samuel/red_choppers/");


Flight::route('/', function () {
    Flight::render('index.php', array('title' => 'Inicio'));
});

Flight::route('/about', function () {
    Flight::render('about.php', array('title' => 'Acerca'));
});

#404
Flight::map('notFound', function () {
    // Display custom 404 page
    Flight::render('404.php');
});

Flight::start();
