<?php
      if(isset($_COOKIE['userID'])){
        echo '<script language="javascript">';
        echo 'alert("Dang nhap thanh cong")';
        echo '</script>';
      }else{
        echo '<script language="javascript">';
        echo 'alert("ban chua dang nhap vui long dang nhap")';
        echo '</script>';
        header('Location: /ltweb/buoi3/login.html');
      }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imfomatin</title>
    <link rel="stylesheet" type="text/css" href="./cssjs/infomation.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
      .root{
        width: 80%;
            margin:auto;
      }
    </style>
</head>
<body>
      <div class="root">
    <?php 
      include("connect.php");
      $id = $_COOKIE['userID'];   
      $sql = "SELECT * FROM `thanhvien` where  id=$id LIMIT 1";
      $result = $con->query($sql);
      print_r($result);
      $rowcount=mysqli_num_rows($result);
      print($rowcount);
      if($rowcount==0){
        echo '<script language="javascript">';
        echo 'alert("ban chua dang nhap vui long dang nhap")';
        echo '</script>';
        header('Location: /ltweb/buoi3/login.html');
      }
      while ($row = $result->fetch_assoc()) {
        echo "<div class='navigation'>";
        echo "<table>";
        echo "<button onclick='delCookie()' class='btn_logout btn btn-danger'>Logout</button>";
        echo "<tr> ";
        echo "<div> <img class='imgAvatar' src=".$row['hinhanh'].">";
        echo "</tr><tr>";

        echo  " <p class='nameLogin'>Xin Chao: ".$row['tendangnhap']."</p>";
        echo  " <p class='nameLogin'>Gioi Tinh: ".$row['gioitinh']."</p>";
        echo  " <p class='nameLogin'>Nghe Ngiep: ".$row['nghenghiep']."</p>";
        echo  " <p class='nameLogin'>So Thich:  ".$row['sothich']."</p>";
        
      }
      echo "</tr></div>
       </table>
      </div>";
    ?>
       <div>
          <a href='./themsanpham.php'> them san pham </a>
          <a href='./danhsachsp.php' style="float: right"> danh sach san pham </a>

       </div>
      <script>
         function delCookie() {
          //  delete_cookie('roundcube_sessauth');
           document.cookie = "userID=; expires=Thu, 01 Jan 1970 00:00:00 UTC;";
           location.reload();
         }
      </script>
       </div>
</body>
</html>