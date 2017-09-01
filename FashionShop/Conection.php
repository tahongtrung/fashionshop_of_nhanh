<?php 

define('DBHOST',"localhost");
define('DBUSER',"root");
define('DBPASS',"");
define('DBNAME',"fashionshop");

$link = @mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);
if ($link===null)
{
    echo 'Fail!';
    
}else{
//    echo 'Succesfully';
//    $sql="select * from user";
//    $result = mysqli_query($link, $sql);
//    
    
}


?>