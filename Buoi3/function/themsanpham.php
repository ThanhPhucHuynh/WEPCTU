<?php
    
    print($_COOKIE['userID']);
    if(!isset($_COOKIE['userID'])){
        header('Location: /ltweb/buoi3/login.html');
    }
?>
<!DOCTYPE html>
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
    </style>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
    <table>
        <tr>
            <td>
                <table style="width: 100%;">
                    <tr>
                        <td colspan='3'>
                            <h2>
                                <center>Them San Phan mới</center>
                            </h2>
                        </td>
                    </tr>
                    <tr>
                        <td colspan='3'>
                            <center>Vui lòng điền thông tin bên dưới để đăng ký tài khoảng</center>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <form method="POST" action="addProducts.php" id="form" enctype="multipart/form-data">
                    <table id="tb1">
                        <tbody>

                            <tr>
                                <td>Ten San Pham</td>
                                <td>
                                    <input id="account" name="nameProduct" type="text">
                                    <p id="validateAccount"></p>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Chi tiet san pham</td>
                                <td>
                                    <!-- <input id="password" name="password" type="password"> -->
                                    <textarea id='chitietsanpham' name='ctsp' rows="4" cols="50"></textarea>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Gia San Pham</td>
                                <td>
                                    <!-- <input id="passwordValidate" name="passwordValidate" type="password"> -->
                                    <input id="gia" type='number' name="gia">(VND)
                                    <p id="passwordValidateMessage"></p>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Hình đại diện</td>
                                <td>
                                    <input type="file" name="imgProduct" id="imgProduct">
                                    <p id="imgAvatarValidate"></p>
                                </td>
                                <td>

                                </td>
                            </tr>
                          
                           
                           
                            <tr>
                                <td></td>
                                <td>
                                    <button id="btn_submit" type="submit">ADD</button>
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



    <script>
        
        // $("#form").submit((e)=>{
        //     event.preventDefault();
        //     if(Validate()){
        //         console.log(Validate())
        //         var formData = new FormData($("#form")[0]);
        //         // console.log(.serialize())
        //         // formData.append( $("#form").serialize())
        //         formData.append('file', $('input[type=file]')[0].files[0]);
        //        $.ajax({
        //            url: 'function/login.php',
        //            type: 'POST',
        //            data: formData,
        //            processData: false,
        //            contentType: false,
        //            enctype: 'multipart/form-data',
        //            success: function(){
        //                 alert("thanhcong");
        //                 window.location="http://localhost/ltweb/buoi3/login.html";
        //            }
        //        });
               
        //     }
        // })
        // function Validate() {
        //     var account = $("#account").val();
        //     var password = $("#password").val();
        //     var passwordValidate = $("#passwordValidate").val();
        //     var imgAvatar = $("#imgAvatar");
        //     var gioitinh = $('input[name=gioitinh]:checked').val();
        //     var jobs = $("#jobs").val();
        //     var sothich = '';
        //     $('.sothich:checked').each((index)=>{
        //         // console.log($('.sothich:checked')[index].value)
        //         if(sothich==''){
        //         sothich =($('.sothich:checked')[index].value)

        //         }else{
        //          sothich =sothich +", "+ ($('.sothich:checked')[index].value)
        //         }
        //     });
        //     var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        //     var flag = true;
        //     if(account===''){
        //         $("#validateAccount").html("tktrong");
        //         flag=false;
        //     }else{
        //         $("#validateAccount").html("");
        //     }
        //     if(password!==passwordValidate || password===''|| passwordValidate ===''){
        //         $("#passwordValidateMessage").html("pass khong dung hoac chua nhap");
        //         flag=false;
        //     }else{
        //         $("#passwordValidateMessage").html("");

        //     }
        //     if(imgAvatar.val()===''){
        //         $("#imgAvatarValidate").html("chua them hinh");
        //         flag=false;
        //     }else{
        //         $("#imgAvatarValidate").html("");
        //     }
        //     return flag;
        //     // console.log(account,password,passwordValidate,imgAvatar,gioitinh,jobs,sothich)
        // }
    </script>
</body>

</html>