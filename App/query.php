<?php

require __DIR__ . '/../vendor/autoload.php';

use ardiStory\Config\ConnectDB;

$sql = "SELECT * FROM users";

$connection = ConnectDB::connect();
$statement = $connection->query($sql);

foreach ($statement as $row) {
    echo "ID : " . $row['id'] . PHP_EOL;
    echo "Username : " . $row['username'] . PHP_EOL;
    echo "Password : " . $row['password'] . PHP_EOL;
}
