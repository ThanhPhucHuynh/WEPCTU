
  <?php 
            if(isset($_POST['account'])){
                echo "Dang nhap thanh cong";
                // print($_COOKIE['userID']);
                // if(isset($_COOKIE['userID'])){
                    // header('Location: function/infomation.php');
                // }
            }

        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>DangNhap</title>
    <style>
        .root{
            width: 80%;
            margin:auto;
        }
        .root h1{
            width: 100%;
            display: block;
            text-align: center;
            margin-bottom: 50px;
        }
        .btn-dangky{
           float: right;
           border: 1px solid wheat;
           border-radius:2px;
        }
        .erro{
            color: red;
        }
    </style>
</head>
<body>
    <div class="root">
        <h1>Dang Nhap</h1>
      

        <form method="POST" action="login.php" id="form" enctype="multipart/form-data"
                    onsubmit="return Validate()"
                >
            <p>Tai Khoan</p>
            <input id='account' type="text" class="form-control" name="account" placeholder="tai khoan">
            <p class="erro" id="validateAccount"></p>
            <br>
            <p>Mat Khau</p>
            <input type="password" id='password' class="form-control" name="password" placeholder="pass">
            <p class="erro" id="passwordMessage"></p>
            <br>
            <br>
            <button type="submit"  class="btn btn-primary">Đăng Nhập</button>
            <!-- <a href="bai2.html">
                <button  type="button"  class="btn btn-primary btn-dangky">Đăng Ký</button>
            </a> -->
        </form>
    </div>

    <script src="login.js"></script>
</body>
</html>