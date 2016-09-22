<?php 
DEFINE ('DB_HOST', '127.0.0.1');
DEFINE ('DB_NAME', 'parks_db');
DEFINE ('DB_USER', 'parks_user');
DEFINE ('DB_PASS', 'parkme');

require 'db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS national_parks;');

$dbc->exec(
    'CREATE TABLE national_parks (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(20) NOT NULL,
    location VARCHAR(50) NOT NULL,
    date_established DATE NOT NULL,
    area_in_acres DOUBLE NOT NULL,
    PRIMARY KEY (id)
    );'
);

