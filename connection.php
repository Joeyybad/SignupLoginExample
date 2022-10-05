<?php
  $serverName = "127.0.0.1";
  $dbUsername = "jordan";
  $dbPassword = "jordan";
  $dbName = "site1"; 
  $dbPort = "3306";

 if (!$conn = mysqli_connect($serverName,$dbUsername,$dbPassword,$dbName)){
  die("failed to connect!");
 }
?>