<?php 
  switch($action){

  case "logout":
    $_SESSION = array(); 
    session_destroy(); 
    $login_message = 'You have been logged out.'; 
    include('view/login.php'); 
    break;
    
  case "show_register":
    include('view/register.php');
    break;

  case "show_login":
		include ('view/login.php');
    break;

  case "login":
    if (is_valid_admin_login($username, $password)){
      $_SESSION['is_valid_admin'] = true; 
      header('location: .?action=list_vehicles');
    } else {
      $login_message = 'Incorrect Login / Login Required.'; 
      include('view/login.php');
    } 
    break; 
  /*
   • action = register
		○ include /util/valid_register.php
		○ call valid_registration function
		○ if $errors array contains errors, include /view/register.php 
		○ else call add_admin function (pg 703)
		○ and set is_valid_admin session variable 
      and redirect to controller with "list_vehicles" action
   */
  case "register":
    include('util/valid_register.php');
    $errors = valid_registration($username, $password, $confirm_password);
    if($errors){
      include('view/register.php');
    }else{
      add_admin($username, $password);
      $_SESSION['is_valid_admin'] = true;
      header('location: .?action=list_vehicles');
    }
    break;
   
}

?>