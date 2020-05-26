<?php
    include("connect.php");
    if(isset($_COOKIE['userID'])){
        
        $idsp=$_GET['idsp'];
        $sql = "DELETE FROM sanpham WHERE idsp = '$idsp'";    
        $con->query($sql);
        header('Location: /ltweb/buoi3/function/danhsachsp.php');



    }else{
        echo '<script language="javascript">';
        echo 'alert("ban chua dang nhap vui long dang nhap")';
        echo '</script>';
        header('Location: /ltweb/buoi3/login.html');
    }


?>