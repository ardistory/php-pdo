<?php

require __DIR__ . '/../vendor/autoload.php';

use ardiStory\Config\ConnectDB;

try {
    $connection = ConnectDB::connect();
    echo "Koneksi Sukses!!!";
} catch (PDOException $exception) {
    echo "Error : " . $exception->getMessage();
}
