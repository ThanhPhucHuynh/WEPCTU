<?php
      if(isset($_COOKIE['userID'])){
        // echo '<script language="javascript">';
        // echo 'alert("Dang nhap thanh cong")';
        // echo '</script>';
      }else{
        echo '<script language="javascript">';
        echo 'alert("ban chua dang nhap vui long dang nhap")';
        echo '</script>';
        header('Location: ../login.html');
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
    //   print_r($result);
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
          <a href='./infomation.php' style="float: right"> Thong tin ca nhan </a>

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
                    <td><a href='chitet.php?product=".$row['idsp']."'> Chi tiet </a></td>
                    <td><a href='suasp.php?product=".$row['idsp']."'><img class='img_icon' src='./icon/edit.png'> </a></td>
                    <td><a href='xoasp.php?idsp=".$row['idsp']."'><img class='img_icon' src='./icon/delete.png'> </a></td>
                    
              </tr>";


      }
      echo "</table>";


        ?>   

      <div id="wrap">
	<div id="title">
		<h1>Bài 2 - Buổi 4</h1>
	</div> <!--end div title-->
	<div id="menu">
		<!-- chèn menu của sinh viên vào-->
	</div> <!--end div menu-->
	<div id="content">
		<!--Nội dung trang web-->
		<h1>Slide show</h1>
	
		<form>
			<img id="laptopImg" src="" height="300" width="300" />
			<br/>
			<input type="button" name="previous" value="Previous" onclick="changeSlide(-1)">
			<input type="button" name="next" value="Next" onclick="changeSlide(1)">
			<br/>
			<select id='laptopSel' name="laptopSel" onchange="chooseSlide(value)">
                <?php 
                    $result = $con->query($sql);
                    while($row=$result->fetch_assoc()){
                        
                        echo "<option value='".$row['hinhanhsp']."'> ".$row['tensp']." </option>";
                    } 
                ?>    
            
            
                <!-- <option value="0">HP</option>
				<option value="1">Dell</option>
				<option value="2">Acer</option>
				<option value="3">Asus</option> -->
			</select> 
		</form>
		<p>Yêu cầu:<br/>
		Có 4 hình ảnh về máy tính đính kèm, mặc định hiển thị hình máy HP.<br/>
			<ul>
				<li>Khi người dùng nhấn Next thì hiển thị hình tiếp theo (theo thứ tự Hp -> Dell -> Acer -> Asus).</li>
				<li>Khi người dùng nhấp Previous thì hiển thị hình trước đó.</li>
				<li>Cả nút Next và Previous đều hiển thị vòng tròn (nếu đang xem hình HP mà nhấn Previous thì sẽ chuyển sang hình Asus).</li>
				<li>Người dùng có thể chọn xem một hình nào đó từ danh sách bên dưới nút Previous và Next.</li>
				<li>Khi người dùng thay đổi hình bằng cách nhấn Previous hoặc Next thì tên hiển thị bên dưới cũng thay đổi theo.</li>
			</ul>	
		</p>
	</div> 


      <script>

        var IMAGE_PATHS = [];
        var img_path = document.getElementById('laptopSel').options; 
        var choose = 0;
                // console.log(img_path)
        document.getElementById("laptopImg").src = img_path[0].value;

        function changeSlide(pos) {
            // console.log(img_path);
            if(pos===1){
                if(choose===img_path.length-1){
                    choose = 0;
                }else{
                    choose+=1;
                }

            }
            if(pos===-1){
                if(choose===0){
                    choose = img_path.length-1;
                }else{
                    choose-=1;
                }

            }
            
            // console.log(img_path[choose].value,choose,img_path.length)
            document.getElementById("laptopImg").src = img_path[choose].value;
            chooseSlide(img_path[choose].value)

        }
        function findsp(pos){
            var i = 0;
            for(var a of img_path){
                // console.log(a.value);
                if(pos===a.value){
                    return i;
                }else{
                    i++;
                }

            }
            return -1;


        }
        function chooseSlide(pos) {
            var index = findsp(pos);
            // console.log("index",index)

            // console.log(pos)
           choose=Number(pos);
        // sinh vien tu viet code cho chooseSlide:
        // pos = x: hien thi file anh x
            document.getElementById("laptopSel").selectedIndex = index;
            document.getElementById("laptopImg").src = pos ;
            choose=index;
            // document.getElementById('laptopSel').selectedIndex = pos;
            // console.log(pos);
            
        }


         function delCookie() {
          //  delete_cookie('roundcube_sessauth');
           document.cookie = "userID=; expires=Thu, 01 Jan 1970 00:00:00 UTC;";
           location.reload();
         }
      </script>
      </div>

</body>
</html>