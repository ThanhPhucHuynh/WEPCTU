<?php 

    include('connect.php');
    $idsp = $_GET['id'];
    // $idsp=$_GET['product'];
     
    
      $sql = "SELECT * FROM `sanpham` where  idsp='$idsp'";
      $result = $con->query($sql);
     
      
      
    
      while ($row = $result->fetch_assoc()){
        echo "<img class='imgproduct' src='".$row['hinhanhsp']."'>";
      }
      

?>