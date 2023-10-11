<?php

require __DIR__ . '/../vendor/autoload.php';

use ardiStory\Config\ConnectDB;

$inputUserDariLuar = 'ardistory';
$inputPasswordDariLuar = 'sqlinject';

$sql = "SELECT * FROM login WHERE username=? AND password=?;";

$connection = ConnectDB::connect();
$statement = $connection->prepare($sql);
$statement->execute([$inputUserDariLuar, $inputPasswordDariLuar]);

foreach ($statement as $row) {
    echo "Login Sukses!";
    echo $row['username'] . PHP_EOL;
    echo $row['password'] . PHP_EOL;
}
