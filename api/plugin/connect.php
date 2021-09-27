<?php

  define('DB_HOST', 'localhost');

  define('DB_PORT', '3306');

  // Your database username here
  define('DB_USERNAME', 'db_username'); 

  // Your database password here
  define('DB_PASSWORD', 'db_password');

  // Your database name here
  define('DB_NAME', 'db_name');



  try {

    $db = new PDO("mysql:host=".DB_HOST.";port=".DB_PORT.";dbname=".DB_NAME.";charset=utf8", DB_USERNAME, DB_PASSWORD);

  }

  catch (PDOException $e) {

    die("<strong>MySQL connection error:</strong> ".utf8_encode($e->getMessage()));

  }

?>