<?php
    $conn=new mysqli('localhost','root','','crudoperation');
    if($conn){
        echo "connection successful";
    }else{
        die(mysqli_error($conn));
    }
?>