    <?php

include '../engine/autoload.php';
autoload('../config');


        //Удаление товара
if ($_POST["delet_good"]){
$delet_query = sprintf("DELETE FROM basket WHERE id_good =   \"%s\";",$_POST["delet_good"]); 
mysqli_query(myDbConnect(), $delet_query);
$_POST["delet_good"]=0;


}

if ($_POST["delet_all"]){
$delet_query = sprintf("DELETE FROM basket WHERE username =   \"%s\";",$_SESSION["username"]); 
mysqli_query(myDbConnect(), $delet_query);
$_POST["delet_all"]=0;


}
header ('location: '.$_SERVER['REQUEST_URI']);
die;
?>
        