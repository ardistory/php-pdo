<?php

require __DIR__ . '/../vendor/autoload.php';

use ardiStory\Config\ConnectDB;

$username = "ardistoryd";
$password = "rahasia123";

$sql = "SELECT * FROM data WHERE username=? AND password=?";

$connection = ConnectDB::connect();
$statement = $connection->prepare($sql);
$statement->execute([$username, $password]);

if ($row = $statement->fetch()) {
    echo "Login Berhasil!" . PHP_EOL;
    echo $row['username'] . PHP_EOL;
    echo $row['password'] . PHP_EOL;
} else {
    echo "Login Gagal!";
}

$connection = null;
