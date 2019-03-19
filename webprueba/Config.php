<?php
   define('DB_SERVER', '127.0.0.1');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'chimpocomono');
   define('DB_DATABASE', 'dbweb');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   
   $mysqli = new mysqli("localhost", "root", "chimpocomono");
   $mysqli->select_db("dbweb");
   
?>