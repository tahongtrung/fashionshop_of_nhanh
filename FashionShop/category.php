<?php 
require_once("pdProduct.php");
if(isset($_GET['type'])){
    $ct = $_GET['type'];
    $sql_cate = "SELECT pd.id,pd.category_id,pd.name,mf.mf_name,pd.img,pd.price FROM manufacture as mf JOIN product as pd ON pd.manufacture = mf.id JOIN category as ct ON ct.id = pd.category_id WHERE ct.category_code= '$ct'";
    $result_cate = mysqli_query($link,$sql_cate); 

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>FSHOP</title>
	<link rel="stylesheet" type="text/css" href="styles/css/Product.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=vietnamese" rel="stylesheet">
    <script language="JavaScript" src="styles/js/jsHome.js"></script>
</head>
<body>
    <?php
        include("module/header.php");
    ?>
    <div class="content">
        <div class="wrapper catelogue">
            <div style="width:20%;float:left">
                <?php
                    include("module/menuProduct.php");
                ?>
            </div>
            <div style="width:80%;float:right;height:auto;">
                <div class="con-product" style="width:100%;height:1100px;">
                    <ul>
                        <?php while($row=mysqli_fetch_assoc($result_cate)){  
                        ?>
                        <li style="padding-right:1.5%;padding-top:30px;">
                            <div class="img-product">
                                <div style="width:210px;height:230px;"><img src="<?php echo $row['img']; ?>"></div>
                                <div style="width:100%;height:50px;">
                                    <a href="productdetail.php?id=<?php echo $row['id']?>&ct=<?php echo $row['category_id']?>"><?php echo $row['name']; ?></a>
                                </div>
                                <div><p style="color:#c8c8c8">NSX: <? echo $row['mf_name']; ?></p>
                                </div>
                                <div style="font-size:24px;font-weight:bold;">
                                    <p><? echo $row['price']; ?> VNĐ</p>
                                </div>
                            </div>
                        </li>
                <?php }?>
                    </ul>
                </div>
                <div style="text-align:center;">
                <ul class="pagination">
                    <li><a href="#">«</a></li>
                    <li><a href="#">1</a></li>
                    <li><a class="active" href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">»</a></li>
                </ul>
            </div>
            </div>
            
        </div>
    </div>
    <?php
        include("module/footer.php");
    ?>
</body>
</html>