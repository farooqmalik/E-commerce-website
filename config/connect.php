<?php
$connection = mysqli_connect('localhost', 'root', '', 'ecomphp');
if (!$connection) {
    echo "Error:unable to connect to MYSQL." . PHP_EOL;
    echo "Debugging errno" . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error:" . mysqli_connect_error() . PHP_EOL;
    exit;
}