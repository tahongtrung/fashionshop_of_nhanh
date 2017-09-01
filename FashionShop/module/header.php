
<div class="wrapper wrapper-header">
    <div class="header"> 
        <ul>
            <li>
                <div class="header-search">
                    <form action="search.php" method="post">
                        <div class="input-search">
                            <input name="keyword" type="text"     style="width:359px;height:30px; border: 1px solid #c8c8c8">
                        </div>
                        <div class="btn-search">
                        <button type="submit" class="searchBtn" style="height:32px; width:90px;" >Tìm kiếm
                        </button>
                        </div>
                    </form>
                </div>
            </li>
            <?php
            //
            if(isset($_SESSION['user'])){ //Kiểm tra SESSION khi login.php gửi qua có tồn tại hay không.
                echo '<li style="padding:0px 10px 0px 380px;">
                        <div class="right-useravatar">
                        <img src="styles/img/iconUser.png"/>
                        <div class="right-username">
                            <p>'.'  '.$_SESSION['user'].'</p>
                            <a href="logout.php">Logout</a>
                        </div>
                    </div>
                </li>';
            }
            else 
                echo '<li style="padding:0px 10px 0px 450px;">
                        <div class="right-useravatar">
                            <img src="styles/img/iconUser.png"/>
                            <div class="right-username">
                                <button onclick="loginPop();" id="login">Đăng nhập</button>
                            </div>
                        </div>
                    </li>';
            ?>
            <!--Giỏ hàng-->
            <li style="float:right;">
                <div class="right-bag">
                    <p><?php if(isset($_SESSION['soluong'])){ echo $_SESSION['soluong'];  } else echo "-0-"; ?></p><button onclick="bagPop();" style="background-color: white; border:0px"><img src="styles/img/Bag.png">
                    </button>
                </div>
                       
            </li>
        </ul>
    </div>
    <div class="nav-header-top">
        <ul>
            <li style="float:left;width:270px;height:40px;">
                <div class="logo">
                    <img src="styles/img/logo.png"/>
                </div>
            </li>
            <li>
                <div class="navar" style="padding-left:180px;">
                    <ul>
                        <li id="padd"><a href="index.php">Trang chủ</a> </li>
                        <li id="padd" ><a href="product.php#viewPD">Cửa hàng</a></li>
                        <li id="padd"><a href="index.php#new">Mới</a></li>
                        <li id="padd"><a href="index.php#bestSell">Bán chạy</a></li>
                        <li><a href="index.php#view">Xem nhiều</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>     
    <?php
    include("module/login.php");
    include("module/regi.php");
    include("module/bag.php");
    ?>
    <div class="banner">
        <div class="slideshow-container">
            <div class="mySlides fade" style="display:block;">
                <img src="styles/img/banner.png" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="styles/img/banner.png" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="styles/img/banner.png" style="width:100%">
            </div>
            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>
        </div>  
    </div>
    <div class="container" id="viewPD">
        <div class="container-nav wrapper">
            <ul>
                <li id="padd1"><img src="styles/img/icoShop.png" ><div style="margin-top:-30px;margin-left:65px;">Mua hàng tại shop</div></li>
                <li id="padd1"><img src="styles/img/icoCash.png"><div style="margin-top:-30px;margin-left:65px;">Giao hàng tận tay</div></li>
                <li id="padd1"> <img src="styles/img/icoPackage.png"><div style="margin-top:-30px;margin-left:65px;">Đổi trả trong 7 ngày</div></li>
                <li><img src="styles/img/icoPhone.png"><div style="margin-top:-30px;margin-left:50px;">Liên hệ: 01629594513</div></li>
            </ul>
        </div>
    </div>
<script type="text/javascript">
<?php if(isset($_SESSION['userError'])||isset($_SESSION['mailError'])
         ||isset($_SESSION['passError']))
    echo 'document.getElementById("register-info").style.display = "block";'; ?>
</script>