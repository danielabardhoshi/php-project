<?php
session_start();

$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = '';
$DB_NAME = 'datasql';

$connection = mysqli_connect($DB_HOST , $DB_USER , $DB_PASS , $DB_NAME);
?>