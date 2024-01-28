<?php
$dbhost = 'localhost'; //XAMPP is 'localhost:3306'
$dbuser = 'jaydawso';
$dbpwd  = 'grandpa induing settable distorts'; //XAMPP password is ''
$dbname = 'jaydawso_db';
$link = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname);
if (!$link) {
    die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
}
