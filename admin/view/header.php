<!-- 
	• include /util/valid_admin.php (pg 709) - Only do this after you have completed everything else. Otherwise it will prevent you from viewing your pages.
  • Unlike the example, your redirect in valid_admin.php should have the action "show_login" like this ".?action=show_login"
 -->
<?php
  require_once('util/secure_conn.php'); 
  require_once('util/valid_admin.php');
?>

<!DOCTYPE html>
<html lang="en">

<!--the head section --> 
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <title>Zippy Admin</title> 
  <link rel="stylesheet" type="text/css" href="../css/styles.css"> 
</head>

<!--the body section --> 

<body> 
  
  <header class="container row">
    <h1 class="col l10 offset-l1 s12 center-align">Zippy Admin</h1> 
  </header>
  <main class="container">
