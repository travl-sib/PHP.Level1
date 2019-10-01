<?php
session_start();
include './engine/autoload.php';
autoload('config');

include ENGINE_DIR . "get_user.php";
include ENGINE_DIR . "login_controller.php";

include PUBLIC_DIR . 'header.php';
?>
<form method="post" >
    <div class="form-group">
		<input name="login" class="mb-3 form-control" placeholder="login">
        <input name="password" class="mb-3 form-control" placeholder="password">
    
        <button type="submit" class=" btn btn-primary">Submit</button>
 </div>
      </form>
      
     <?php if (isset($status)) ?>
     <div class="alert  alert-danger"><?=$status?></div>
     
     
     
     <h2>Регистрация</h2>
     <form method="post" >
    <div class="form-group">
		<input name="login_reg" class="mb-3 form-control" placeholder="login">
       <input name="name_reg" class="mb-3 form-control" placeholder="name">
        <input name="password_reg" class="mb-3 form-control" placeholder="password">
    
        <button type="submit" class=" btn btn-primary">Submit</button>
 </div>
      </form>
      
      
   <?php          
      $user_name=$_POST['name_reg'];
      $user_login=$_POST['login_reg'];
    $user_password=$_POST['password_reg'];
      
      $insert_reg = sprintf("INSERT INTO user (user_name,  user_login,  user_password ) VALUES (\"%s\" ,  \"%s\",\"%s\") ;", $user_name, $user_login, $user_password );
   
    mysqli_query(myDbConnect(), $insert_reg);
      
      
 
  
    include PUBLIC_DIR . 'footer.php';
?>