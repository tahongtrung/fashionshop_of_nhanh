<?php
require_once("Conection.php");

mysqli_query($link,"set names 'utf8'");
$sql = "SELECT ct.category_code, ct.category_name FROM category as ct";
$result = mysqli_query($link,$sql);

mysqli_query($link,"set names 'utf8'");
$sql1 = "SELECT mf.mf_code, mf.mf_name FROM manufacture as mf";
$result1 = mysqli_query($link,$sql1);

mysqli_query($link,"set names 'utf8'");
$sql2 = "SELECT pd.id,pd.category_id,pd.name,mf.mf_name,pd.img,pd.price FROM manufacture as mf JOIN product as pd on pd.manufacture = mf.id limit 12";
$result2 = mysqli_query($link,$sql2);
   
?>