<!-- 
  In register.php:
	• include header.php
	• display errors from $errors array if they exist (see valid_registration function in provided valid_register.php file)
	• form to submit: username, password, and confirm_password
	• hidden action input with value = "register"
	• include footer.php

 -->
<?php include 'header.php'; ?> 

<section class="row">
  <div class="col l6 offset-l3 m6 offset-m3 s12">
    <?php 
      if (!empty($errors)) {
        foreach($errors as $error){
          echo "<p class='red-text'>$error</p>";
        }
      } 
    ?>
  </div>
	
</section>

<section class="row">
  <h2 class="orange-text">Register a new admin user</h2>
  <form action="." method="post" class="col l6 offset-l3 m6 offset-m3 s12">
    <input type="hidden" name="action" value="register">

    <label class="black-text">Username:</label><br>
    <input type="text" name="username"/><br>
    <label class="black-text">Password:</label><br>
    <input type="text" name="password"/><br>
    <label class="black-text">Confirm Password:</label><br>
    <input type="text" name="confirm_password"/><br>

    <button class="btn right waves-effect waves-light indigo darken-1">Register</button>
  </form>
</section>

<?php include 'footer.php'; ?> 
