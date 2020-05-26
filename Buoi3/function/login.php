<?php

echo "Dấddaaaads";
print_r($_POST);
print("<br>");
print_r($_POST['sothich']);
$chuoi = "";
foreach ($_POST['sothich'] as $value){
    $chuoi = "$chuoi , $value";
}
print("<br>");
print(substr($chuoi,2,strlen($chuoi)));
$sothichFinal = substr($chuoi,2,strlen($chuoi));

// print($_POST["imgAvatar"]);
$tendangnhap=$_POST["account"];
$password=$_POST["password"];
$gioitinh=$_POST["gioitinh"];
$jobs=$_POST["jobs"];
$sothich=$_POST["sothich"];
// header('Location:/ltweb/buoi3/bai2.html');
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["imgAvatar"]["name"]);
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}else if (move_uploaded_file($_FILES["imgAvatar"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["imgAvatar"]["name"]). " has been uploaded.";
} else {
    echo "Sorry, there was an error uploading your file.";
}

print_r($_FILES);

$con = new mysqli("localhost","root","","Buoi3");
$con->set_charset("utf8");

$sql = "INSERT INTO thanhvien(tendangnhap,matkhau,hinhanh,gioitinh,nghenghiep,sothich)value('$tendangnhap','$password','$target_file','$gioitinh','$jobs','$sothichFinal')";
 print("<br> $sql");
 $con->query($sql);
print("<br>Thanhconf");

// $sql1 = "SELECT * FROM `thanhvien`";
// $result = $con->query($sql1);
// print_r($result);
// while ($row = $result->fetch_assoc()){
//     echo "<br>";
//     echo $row["gioitinh"];

// }

$con->close();


?>