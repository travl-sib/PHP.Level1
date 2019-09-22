<?php
include './engine/autoload.php';
autoload('config');

if ($_POST['feedback'] && $_POST['name'] && $_POST['id']) {

	$feedback = $_POST['feedback'];
    $id = $_POST['id'];
    $name = $_POST['name'];
	
	$insert_query = sprintf("INSERT INTO feedback (feedback_body, feedback_user, id_good) VALUES (\"%s\" , \"%s\", \"%s\") ;", $feedback, $name, $id);
    
    
mysqli_query(myDbConnect(), $insert_query);
}

header("location: /index.php");
die;