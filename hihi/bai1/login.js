
function Validate(){
    var flag = true;

    var tenDangNhap = document.getElementById("account").value;
    var password = document.getElementById("password").value;
  
    document.getElementById('validateAccount').innerHTML = '';
    document.getElementById('passwordMessage').innerHTML = '';
    console.log(tenDangNhap,password)





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

    return flag;
}

