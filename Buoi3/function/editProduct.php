<?php

include("connect.php");

print($_COOKIE['userID']);
print_r($_POST);

$tensp = $_POST['nameProduct'];
$chitietsp = $_POST['ctsp'];
$giasp = $_POST['gia'];
$idtv =$_COOKIE['userID'];
$idsp = $_GET['product'];

$target_dir = "products/";
$target_file = $target_dir . basename($_FILES["imgProduct"]["name"]);
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}else if (move_uploaded_file($_FILES["imgProduct"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["imgProduct"]["name"]). " has been uploaded.";
} else {
    echo "Sorry, there was an error uploading your file.";
}
echo "<br/>";
print($target_file);
echo "<br/>";

if($_FILES["imgProduct"]["name"]==''){
    $sql = "UPDATE `sanpham` SET `tensp` = '$tensp', `chitietsp` = '$chitietsp', `giasp` = '$giasp' WHERE `idsp` = $idsp";
}else{
    $sql = "UPDATE `sanpham` SET `tensp` = '$tensp', `chitietsp` = '$chitietsp', `giasp` = '$giasp', `hinhanhsp` = '$target_file' WHERE `idsp` = $idsp";

}
echo "<br/>";
//  $sql = "INSERT INTO sanpham (tensp,chitietsp,giasp,hinhanhsp,idtv) VALUES ('$tensp', '$chitietsp', '$giasp','$target_file',$idtv)";
 


print($sql);
$con->query($sql);
  
 header("Location: /ltweb/buoi3/function/chitet.php?product=$idsp");
?>



