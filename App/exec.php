<?php

require __DIR__ . '/../vendor/autoload.php';

use ardiStory\Config\ConnectDB;


$sql = "INSERT INTO users (username, password) VALUES ('ardiputra', 'rahasia123')";

$connection = ConnectDB::connect();
$connection->exec($sql);
$connection = null;
