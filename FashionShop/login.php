<?php
require_once("Conection.php"); 
session_start();
if(isset($_POST['txtUser']) && isset($_POST['txtPass'])){
   
    $userName = $_POST["txtUser"];
    $passWord = $_POST["txtPass"];
    
    mysqli_query($link,"set names 'utf8'"); //set TV c ho mysql
    $sql = "select * from user";
    $result = mysqli_query($link, $sql);
    
    if (mysqli_num_rows($result) > 0) {
      
        while($row = mysqli_fetch_assoc($result)) {
            if($userName == $row["username"] && $passWord == $row["password"]){
                
                $_SESSION['user'] = $row['fullname'];
                header("Location:index.php"); 
                exit();
            }
        }
//        wrong login
        header("Location:http://google.com.vn/");
        exit();
    } 
    else {
        //csdl empty
    }
}
?>