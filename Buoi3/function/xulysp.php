<?php 

    include('connect.php');
    $idsp = $_GET['id'];
    // $idsp=$_GET['product'];
     
    
      $sql = "SELECT * FROM `sanpham` where  idsp='$idsp'";
      $result = $con->query($sql);
      echo "<table class='tbproduct'>";
      echo "<tr>
      <td>ID</td>
      <td>img</td>
      <td>name</td>
      <td>ChiTietsanpham</td>
      <td>Gia</td>
      <td colspan='2'>Lua Chon</td>
      
      
      </tr>";
      while ($row = $result->fetch_assoc()){
        echo "<tr>
                    <td>".$row['idsp']."</td>
                    <td><img class='imgproduct' src='".$row['hinhanhsp']."'></td>
                    <td>".$row['tensp']."</td>
                    <td>".$row['chitietsp']."</td>
                    <td>".$row['giasp']."VND</td>
                    <td><a href='http://localhost/ltweb/buoi3/function/suasp.php?product=".$row['idsp']."'> <img class='img_icon' src='./icon/edit.png'> </a></td>

                    <td><a href='http://localhost/ltweb/buoi3/function/xoasp.php?idsp=".$row['idsp']."'><img class='img_icon' src='./icon/delete.png'> </a></td>

                    
              </tr>";


      }
      echo "</table>";

?>