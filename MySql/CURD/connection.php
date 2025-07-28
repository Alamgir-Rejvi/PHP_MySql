<?php

$connect = new mysqli ("localhost", "root", "", "crud_operation");
// if($connect){
//     echo "Connectiion successfully";
// }else{
//     die(mysqli_error($connect));
// }

if(!$connect){
    die(mysqli_error($connect));
}

?>