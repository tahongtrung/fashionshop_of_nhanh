<?php 
require_once("pdHome.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>FSHOP</title>
    <meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="styles/css/Home.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=vietnamese" rel="stylesheet">
    <script language="JavaScript" src="styles/js/jsHome.js"></script>
    <script language="JavaScript" src="styles/js/jsRegister.js"></script>
</head>
    <!---->
<body>
    <?php
        include("module/header.php");
    ?>
    <div class="content">
        <div class="container-na">
            <div class="wrapper">
                <div class="btngroup" style="width:auto;height:auto;"></div>
            </div>
            <span>Sản phẩm mới</span>
        </div>
        <div class="wrapper con-product">
            <ul id="new">
                <?php
                
                while($row=mysqli_fetch_assoc($result)){                  
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
                <?php } ?>
                
            </ul>
        </div>
        <div class="container-na" >
            <div class="wrapper">
                <div class="btngroup" style="width:auto;height:auto;"></div>
            </div>
            <span>Sản phẩm bán chạy</span>
        </div>
        <div class="wrapper con-product">
            <ul id="bestSell">
                <?php
                while($row=mysqli_fetch_assoc($result1)){  
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
                <?php } ?>
            </ul>
        </div>
        <div class="container-na" >
            <div class="wrapper">
                <div class="btngroup" style="width:auto;height:auto;"></div>
            </div>
            <span>Sản phẩm xem nhiều</span>
        </div>
        <div class="wrapper con-product">
            <ul id="view">
                <?php
                
                while($row=mysqli_fetch_assoc($result2)){                  
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
                <?php } ?>
                
            </ul>
        </div>
    </div>
    <div class="article">
        <div class="container-na" >
            <div class="wrapper">
                <div class="btngroup" style="width:auto;height:auto;">
                </div>
            </div>
            <span>Nhà sản xuất</span>
        </div>
        <div class="wrapper art-img">
            <ul>
                <li id="art-al">
                    <img src="styles/img/NB.png">
                </li>
                <li id="art-al">
                    <img src="styles/img/nike.png">
                </li>
                <li id="art-al">
                    <img src="styles/img/adidas.png">
                </li>
                <li id="art-al">
                    <img src="styles/img/converse.png">
                </li>
                <li id="art-al1">
                    <img src="styles/img/viettien.png">
                </li>
            </ul>
        </div>
    </div>

    <?php
        include("module/footer.php");
    ?>
</body>
</html>