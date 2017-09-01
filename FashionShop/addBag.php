<?php
//require_once("pdProduct.php");
session_start();
if(isset($_POST['addBag'])){
    $quantity = $_POST['quanity'];
    $id = $_GET['id'];
   
    
    
    //$a=array($id=>$quantity);
    
    $_SESSION['cart']=array();
    
    
    //exit();
    $sl=0;
    for($i=0; $i <= count($_SESSION['cart']); $i++){
        if($_SESSION['cart'][$i]['id']==$id)
            $_SESSION['cart'][$i]=array('id'=>$id,'quantity'=>$quantity+$_SESSION['cart'][$i]['quantity']);
        else
            $_SESSION['cart'][$i]=array('id'=>$id,'quantity'=>$quantity);
    }
    for($i = 0; $i<= $_SESSION['cart'].length ; $i++){
        $sl+=$_SESSION['cart'][$i]['quantity'];
    }  
    $_SESSION['soluong']+=$sl;
    
    echo $_SESSION['soluong'];
    
    exit();
    header("Location: product.php");
}
   

//    if (isset($_SESSION['giohang']) /*&& is_array($_SESSION['giohang'])*/) {
//        $count = count($_SESSION['giohang']);
//        $flag = false;
//        for ($i = 0; $i < $count; $i++) {
//            if ($_SESSION['giohang'][$i]["id"] == $id) {
//                $_SESSION['giohang'][$i]["quanity"] += $quanity;
//                $flag = true;
//                break;
//            }
//        }
//        if ($flag == false) {
//            $_SESSION['giohang'][$count]["id"] = $id;
//            $_SESSION['giohang'][$count]["quanity"] += $quanity;
//        }
//    } else {
//        $_SESSION['giohang'] = array();
//        //$_SESSION[] = array();
//        //$_SESSION['id'] = $id;
//        
//        $_SESSION['giohang'][0]["id"] = $id;
//        $_SESSION['giohang'][0]["quanity"] = $quanity;
//   }
//    //echo $_SESSION['giohang'][0]["id"] = $id;
//    echo $_SESSION['giohang'][0]["quanity"] = $quanity;
//    header("Location: product.php");//$_SERVER['PHP_SELF']);


?>