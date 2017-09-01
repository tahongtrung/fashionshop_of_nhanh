<?php
require_once("pdProduct.php");

if(isset($_POST['txtUserName']) && isset($_POST['txtFullName']) && isset($_POST['txtPassword']) && isset($_POST['txtRePassword']) &&
isset($_POST['txtEmail']) && 
isset($_POST['txtPhone']) && 
isset($_POST['txtBirthday']) && isset($_POST['txtAddress'])){
   
    $userName = $_POST['txtUserName'];
    $fullName = $_POST['txtFullName'];
    $password = $_POST['txtPassword'];
    $rePassword = $_POST['txtRePassword'];
    $email = $_POST['txtEmail'];
    $phone = $_POST['txtPhone'];
    $birthday = $_POST['txtBirthday'];
    $address = $_POST['txtAddress'];
    
    
    if($password != $rePassword){
        $_SESSION['passError'] = "Mật khẩu nhập lại không khớp! Xin vui lòng nhập lại.";
        header("Location:index.php"); 
        exit();
    }
    
    // mã hóa pasword
    //$password = md5($password);
    
    mysqli_query($link,"set names 'utf8'"); //set TV c ho mysql
    $sql = "select * from user";
    $result = mysqli_query($link, $sql);
    
    if(isset($_SESSION['passError'])){
        session_unset($_SESSION['passError']);
    }
    if(isset($_SESSION['phoneError'])){
        session_unset($_SESSION['phoneError']);
    }
    
    if (mysqli_num_rows($result) > 0) {
      
        while($row = mysqli_fetch_assoc($result)) {
            
            if($userName == $row["username"]){
                $_SESSION['userError'] = "Tài khoản đã tồn tại! Xin vui lòng nhập lại!";
                header("Location:index.php"); 
                exit();
            }else if($email == $row['email']){
                $_SESSION['mailError'] = "Email đã bị trùng khớp! Xin vui lòng nhập lại!";
                header("Location:index.php"); 
                exit();
            }
            else { //Huỷ session
               
                if(isset($_SESSION['userError'])){
                    session_unset($_SESSION['userError']);
                }
                if(isset($_SESSION['mailError'])){
                    session_unset($_SESSION['mailError']);
                }
            }
        }
    }
  $sql_insert = "INSERT INTO user (username,password,fullname,birthday,email,phone,location
 )VALUE('{$userName}','{$password}','{$fullName}','{$birthday}','{$email}','{$phone}','{$address}')";
                          
  $result = mysqli_query($link,$sql_insert);
}
?>