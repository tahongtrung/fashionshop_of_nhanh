<?php
session_start();
require_once("conection.php");
if(isset($_GET['id']) && isset($_GET['ct'])){
    $id = $_GET['id'];
    $ct = $_GET['ct'];

    $sql_pd = "SELECT pd.id,pd.size_id,pd.category_id,pd.view,pd.love,pd.name,mf.mf_name,pd.img,pd.price FROM product AS pd JOIN manufacture AS mf ON mf.id = pd.manufacture WHERE pd.id = $id";
    $result_pd = mysqli_query($link,$sql_pd); 
    
    $sql_ct_5 = "SELECT pd.id,pd.category_id,pd.name,mf.mf_name,pd.img,pd.price FROM product AS pd JOIN manufacture AS mf ON mf.id = pd.manufacture WHERE pd.category_id = $ct LIMIT 5";
    $result_ct_5 = mysqli_query($link,$sql_ct_5);
    
    $sql_up_view = "UPDATE product SET view = view + 1 WHERE id = $id";
    $result_up_view = mysqli_query($link,$sql_up_view);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>FSHOP</title>
	<link rel="stylesheet" type="text/css" href="styles/css/ProductDetail.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=vietnamese" rel="stylesheet">
    <script language="JavaScript" src="styles/js/jsHome.js"></script>
</head>
<body>
    <?php
        include("module/header.php");
    ?>
    <div class="content">
        <div class="wrapper" style="height:480px;">
            <?php while($row=mysqli_fetch_assoc($result_pd)){  
            ?>
            <div style="width:40%;float:left;">
                <div class="cont-img">
                    <img src="<?php echo $row['img']; ?>">
                </div>
            </div>
            <div class="cont-info">
                <p><b style="font-size:24px;"><?php echo $row['name']; ?></b></p>
                <p><b>Nhà sản xuất:</b> <?php echo $row['mf_name']; ?></p>
                <div class="info-icon">
                    <ul>
                        <li>
                            <div style="float:left;">
                                 <img src="styles/img/eye.png">
                            </div>
                            <div style="float:right;">
                                <p><?php echo $row['view']; ?></p>
                            </div>
                        </li>
                        <li>
                            <div style="float:left;">
                                 <img src="styles/img/heart1.png">
                            </div>
                            <div style="float:right;">
                                <p><?php echo $row['love']; ?></p>
                            </div>
                        </li>
                        <li>
                            <div style="float:left;">
                                 <img src="styles/img/buy.png">
                            </div>
                            <div style="float:right;">
                                <p>5</p>
                            </div>
                        </li>
                        <li>
                            <div style="float:left;">
                                 <img src="styles/img/check.png">
                            </div>
                            <div style="float:right;">
                                <p>5</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <p><b style="font-size:28px;font-family: 'Roboto', sans-serif;"><?php echo $row['price']; ?> VNĐ</b></p>
                
                
                <form action="addBag.php?id=<?php echo $row['id'];?>" method="post">
                <p style="font-size:18px;">Size</p>
                <div class="info-size">
                    <button><?php echo $row['size_id'];?></button>
                </div>
                <p style="font-size:18px;">Số lượng</p>
                <div class="info-quantity">
                    <input type="text" name="quanity" value="1">
                </div>
                <div style="padding-top:20px;">
                    <div class="btn-left">
                        <a><button type="submit" name="addBag">Thêm vào giỏ</button></a>
                    </div>
                    <form action="productdetail.php" method="post">
                        <div class="btn-right">
                            <button type="submit" name="love">Yêu thích</button>
                        </div>
                    </form>
                </div>
                </form>
            </div>
            <?php }?>
        </div>
        <div class="wrapper cont-para">
            <ul>
                <li>
                    <p>Giới thiệu</p>
                </li>
                <li>
                    <p>Thông tin chi tiết</p>
                </li>
                <li>
                    <p>Đánh giá</p>
                </li>
            </ul>
        </div>
        <div class="wrapper para-about">
            <p>fgdbhl,khnjbhfgvdfgvdfjnhkm</p>
        </div>
        <div class="product-5">
            <div class="wrapper container-na" >
            <span>Sản phẩm cùng loại</span>
            </div>
            <div class="wrapper con-product">
            <ul>
                <?php while($row=mysqli_fetch_assoc($result_ct_5)){  
                ?>
                <li style="padding-right:1.5%;">
                    <div class="img-product">
                        <div style="width:210px;height:230px;"><img src="<?php echo $row['img']; ?>"></div>
                        <div style="width:100%;height:50px;">
                            <a href="productdetail.php?id=<?php echo $row['id']?>&ct=<?php echo $row['category_id']?>"><?php echo $row['name']; ?></a>
                        </div>
                        <div><p>NSX: <? echo $row['mf_name']; ?></p>
                        </div>
                        <div style="font-size:24px;font-weight:bold;">
                            <p><? echo $row['price']; ?> VNĐ</p>
                        </div>
                    </div>
                </li>
                <?php }?>
            </ul>
        </div>
        </div>
    </div>
    <?php
        include("module/footer.php");
    ?>
</body>
</html>