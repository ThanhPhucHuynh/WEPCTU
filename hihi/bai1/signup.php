<?php 
            if(isset($_POST['account'])){
                echo "Dang ky thanh cong";
                // print($_COOKIE['userID']);
                // if(isset($_COOKIE['userID'])){
                    // header('Location: function/infomation.php');
                // }
            }

        ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: auto;
            width: 600px;
        }

        #tb1 {
            border: 1px solid black;
            padding: 5px;
            background-color: rgb(185, 184, 184);

        }

        tr,
        td {
            padding: 10px;
        }

        h2 {
            color: red;
        }
        .erro{
            color: red;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>

<body>
    <table>
        <tr>
            <td>
                <table style="width: 100%;">
                    <tr>
                        <td colspan='3'>
                            <h2>
                                <center>Đăng ký tài khoảng mới</center>
                            </h2>
                        </td>
                    </tr>
                    <tr>
                        <td colspan='3'>
                            <center>Vui lòng điền thông tin bên dưới để đăng ký tài khoản</center>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <form method="POST" action="signup.php" id="form" enctype="multipart/form-data"
                    onsubmit="return Validate()"
                >
                    <table id="tb1">
                        <tbody>

                            <tr>
                                <td>Tên đăng nhập</td>
                                <td>
                                    <input id="account" name="account" type="text">
                                    <p class="erro" id="validateAccount"></p>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Mật khẩu</td>
                                <td>
                                    <input id="password" name="password" type="password">
                                    <p class="erro" id="passwordMessage"></p>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Gõ lại mật khẩu</td>
                                <td>
                                    <input id="passwordValidate" name="passwordValidate" type="password">
                                    <p class="erro" id="passwordValidateMessage"></p>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Hình đại diện</td>
                                <td>
                                    <input type="file" name="imgAvatar" id="imgAvatar">
                                    <p class="erro" id="imgAvatarValidate"></p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>Giới tính</td>
                                <td>
                                    <input type="radio" name="gioitinh" class="gioitinh" value="nam" checked> <label>Nam</label>
                                    <input type="radio" name="gioitinh" class="gioitinh" value="nu"> <label>Nữ</label>
                                    <input type="radio" name="gioitinh" class="gioitinh" value="Khác"><label>Khác</label>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Nghề nghiệp</td>
                                <td>
                                    <select name="jobs" id="jobs">
                                        <option value="hocsinh">Học Sinh</option>
                                        <option value="giaovien">Giảng viên</option>
                                        <option value="khac">Khác</option>
                                    </select>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Sở thích</td>
                                <td>
                                    <input type="checkbox" name="sothich[]" class='sothich' value="Thể Thao" checked> <label>Thể Thao</label>
                                    <input type="checkbox" name="sothich[]" class='sothich' value="Du lịch"> <label>Du lịch</label>
                                    <input type="checkbox" name="sothich[]" class='sothich' value="Âm Nhạc"> <label for="">Âm
                                        Nhạc</label><br>
                                    <input type="checkbox" name="sothich" class='sothich' value="Thời Trang"> <label for="">Thời
                                        TRang</label>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <button id="btn_submit" type="submit">Đăng Ký</button>
                                    <button type="reset">Làm lại</button>
                                </td>
                                <td></td>
                            </tr>

                    </table>
                </form>
            </td>
        </tr>
    </table>
    <p>Huynh Thanh Phuc <br>B1706515</p>



 
    <script src="signup.js"></script>
</body>

</html>