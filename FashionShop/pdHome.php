<?php
require_once("Conection.php");

mysqli_query($link,"set names 'utf8'");
$sql = "SELECT pd.id,pd.category_id,pd.name,mf.mf_name,pd.img,pd.price FROM `product` AS pd JOIN manufacture AS mf ON pd.manufacture = mf.id ORDER BY pd.id DESC LIMIT 10";
$result = mysqli_query($link,$sql);

//while($row=mysqli_fetch_assoc($result)){
//    echo $row['name'].'</br>';
//    echo $row['img'].'</br>';
//    echo $row['mf_name'].'</br>';
//    echo $row['price'].'</br>';
//    
//}
mysqli_query($link,"set names 'utf8'");
$sql1 = "SELECT pd.id,pd.category_id,pd.name,mf.mf_name,pd.img,pd.price FROM manufacture as mf JOIN product as pd on pd.manufacture = mf.id limit 10";
$result1 = mysqli_query($link,$sql1);

mysqli_query($link,"set names 'utf8'");
$sql2 = "SELECT pd.id,pd.category_id,pd.name,mf.mf_name,pd.img,pd.price FROM `product` AS pd JOIN manufacture AS mf ON pd.manufacture = mf.id ORDER BY pd.view DESC LIMIT 10";
$result2 = mysqli_query($link,$sql2);
?>