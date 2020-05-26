<?php include("connect.php"); 


?>
<html>
    <head>
        <style>
            .img{
                height: 200px;
                width: 200px;
                border-radius: 50px;
                display: block;
            }
            </style>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>

<body>

<?php
$tendangnhap=$_POST["account"];
$password=$_POST["password"];
$flag = 0;

$sql1 = "SELECT * FROM `thanhvien` where  tendangnhap='$tendangnhap' LIMIT 1";
$result = $con->query($sql1);
while ($row = $result->fetch_assoc()){
    if($row["matkhau"] == $password){
        $fimg = $row["hinhanh"];
        $flag = 1;
        $id = $row["id"];
        break;
    }
}
if($flag == 1 ){
    echo "<h1>Dang nhap thanh cong</h1>";
    echo "<img class='img' src='$fimg'>";
    echo "xin chao $tendangnhap";
    $sql1 = "SELECT * FROM `thanhvien` where  id='$id' LIMIT 1";
    setcookie("userID","$id",time()+60*60);
    
    header('Location: /ltweb/buoi3/function/infomation.php');
    // $result = $con->query($sql1);
    // while ($row = $result->fetch_assoc()){
      
    //     echo "  <table>
    //                 <tr>
    //                     <td>".$row['id']."</td>
    //                     <td>".$row['tendangnhap']."</td>
    //                 </tr>
    //             </table>";
     
    // }
}else {
    echo "<h1>Dang nhap Khong thanh cong</h1>";
}




$con->close();


?>
    </body>

</html>

