<?php 
    include('./function/connect.php');
     
    $ten =  $_GET['name'];

    $sql = "SELECT * from thanhvien where tendangnhap= '$ten' ";

    $result = $con -> query($sql);

    $count = $result->num_rows;

    if($count===0){
        echo "";
    }else{
        echo "Account Existed";
    }

?>