
function Validate(){
    var flag = true;

    var tenDangNhap = document.getElementById("account").value;
    var password = document.getElementById("password").value;
    var passwordValidate = document.getElementById("passwordValidate").value;
    var imgAvatar = document.getElementById("imgAvatar").value;
    document.getElementById('validateAccount').innerHTML = '';
    document.getElementById('passwordMessage').innerHTML = '';
    document.getElementById('passwordValidateMessage').innerHTML = '';
    document.getElementById('imgAvatarValidate').innerHTML = '';





    // chexk tendang nhap
    var btChinhQuy = /^[A-Za-z][A-Za-z0-9]{5,14}$/;
    if(tenDangNhap===""){
        flag = false;
        document.getElementById('validateAccount').innerHTML = 'Khong duoc trong';
    }else if(!btChinhQuy.test(tenDangNhap)){
        flag = false;
        document.getElementById('validateAccount').innerHTML = 'Khong dung dinh dang';
    }


    var btChinhQuypass = /^(?=.*\d)(?=.*[A-Za-z]).{6,15}$/;
    if(!btChinhQuypass.test(password)){
        flag = false;
        document.getElementById('passwordMessage').innerHTML = 'Khong dung dinh dang';
    }

    if(passwordValidate !== password){
        flag = false;
        document.getElementById('passwordValidateMessage').innerHTML = 'Xac nhan chua dung';

    }
    
    if(imgAvatar===''){
        document.getElementById('imgAvatarValidate').innerHTML = 'chua co hinh';
        flag = false;
    }

    return flag;
}





        // $("#form").submit((e)=>{
        //     event.preventDefault();
        //     if(Validate()){
        //         console.log(Validate())
        //         var formData = new FormData($("#form")[0]);
        //         // console.log(.serialize())
        //         // formData.append( $("#form").serialize())
        //         formData.append('file', $('input[type=file]')[0].files[0]);
        //       $.ajax({
        //           url: 'function/login.php',
        //           type: 'POST',
        //           data: formData,
        //           processData: false,
        //           contentType: false,
        //           enctype: 'multipart/form-data',
        //           success: function(){
        //                 alert("thanhcong");
        //                 window.location="login.html";
        //           }
        //       });
               
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