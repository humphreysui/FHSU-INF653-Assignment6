<?php 

  $dsn = 'mysql:host=localhost;dbname=zippyusedautos';
  $username = 'root';
  $password = 'sesame'; 

  //InfinityFree info

  /*
  $host = "sql300.epizy.com";
  $username = "epiz_28276835";
  $password = "BeVL0A9fs2Rfqxi";
  $dbname = "epiz_28276835_zippyusedautos";
  */

  try{
    $db = new PDO ($dsn, $username, $password);
  }catch (PDOException $e){
    $errorMessage = 'Database Error: ';
    $errorMessage .= $e->getMessage();
    include('./view/error.php');
    exit();
  }