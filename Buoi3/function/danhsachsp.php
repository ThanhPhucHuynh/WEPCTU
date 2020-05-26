<?php
      if(isset($_COOKIE['userID'])){
        // echo '<script language="javascript">';
        // echo 'alert("Dang nhap thanh cong")';
        // echo '</script>';
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
    <title>Danh sach san Pham</title>
    <link rel="stylesheet" type="text/css" href="./cssjs/xemsp.css">
    <link rel="stylesheet" type="text/css" href="./cssjs/dssp.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
      .root{
        width: 80%;
            margin:auto;
      }
      .img_icon{
        height: 40px;
        width: 40px;
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
      while ($row = $result->fetch_assoc()) {
        echo "<div class='navigation'>";
        echo "<button onclick='delCookie()' class='btn_logout btn btn-danger'>Logout</button>";

        echo "<div> <img class='imgAvatar' src=".$row['hinhanh'].">";
        echo  " <p class='nameLogin'>".$row['tendangnhap']."</p>";
        
      }
      echo "</div></div>";





    ?>
       <div>
          <a href='./themsanpham.php'> them san pham </a>
          <a href='./infomation.php' style="float: right"> danh sach san pham </a>

       </div>
     <?php
                    // <td><img class='imgproduct' src='".$row['hinhanhsp']."'></td>
                    // <td>img</td>

      $sql = "SELECT * FROM `sanpham` where  idtv='$id'";
      $result = $con->query($sql);
      echo "<table class='tbproduct'>";
      echo "<tr>
      <th>ID</th>
      <th>name</th>
      <th>ChiTietsanpham</th>
      <th>Gia</th>
      <th colspan='3'>Lua Chon</th>
      
      
      </tr>";
      while ($row = $result->fetch_assoc()){
        echo "<tr>
                    <td>".$row['idsp']."</td>
                    <td>".$row['tensp']."</td>
                    <td>".$row['chitietsp']."</td>
                    <td>".$row['giasp']."VND</td>
                    <td><a href='http://localhost/ltweb/buoi3/function/chitet.php?product=".$row['idsp']."'> Chi tiet </a></td>
                    <td><a href='http://localhost/ltweb/buoi3/function/suasp.php?product=".$row['idsp']."'><img class='img_icon' src='./icon/edit.png'> </a></td>
                    <td><a href='http://localhost/ltweb/buoi3/function/xoasp.php?idsp=".$row['idsp']."'><img class='img_icon' src='./icon/delete.png'> </a></td>
                    
              </tr>";


      }
      echo "</table>";


        ?>   




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