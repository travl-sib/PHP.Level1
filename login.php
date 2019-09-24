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
 
     <?php    
    include PUBLIC_DIR . 'footer.php';
?>