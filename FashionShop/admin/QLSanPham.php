<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>FSHOP</title>
	<link rel="stylesheet" type="text/css" href="styles/admin/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=vietnamese" rel="stylesheet">
    <script language="JavaScript" src="styles/admin/js/jsHome.js"></script>
</head>
<body>
    <div class="wrapper wrapper-header">
        <div class="header">
            <ul>
                <li>
                    <div class="header-search">
                <div class="input-search">
                    <input name="first" type="text" style="width:340px;height:30px; border: 1px solid #c8c8c8">
                </div>
                <div class="dropdown">
                    <button class="dropbtn" style="height:32px; width: 120px;"><img src="styles/img/icoMenu.png"><div id="text-s">Danh mục</div>
                    </button>
                    <div class="dropdown-content">
                        <a href="#">Loại sản phẩm</a>
                        <a href="#">Nhà sản xuất</a>
                    </div>
                </div>
                <div class="btn-search">
                    <button class="searchBtn"style="height:32px; width:90px;" >Tìm kiếm
                    </button>
                 </div>
            </div>
                </li>
                <?php
                //$name = "Nhanh";
                if(isset($_SESSION['user'])){
                    echo '<li style="padding:0px 10px 0px 380px;">
                        <div class="right-useravatar">
                        <img src="styles/img/iconUser.png"/>
                        <div class="right-username">
                            <p>'.'  '.$_SESSION['user'].'</p>
                        </div>
                    </div>
                </li>';
                }
                else
                    
                echo '<li style="padding:0px 10px 0px 370px;">
                    <div class="right-useravatar">
                        <img src="styles/img/iconUser.png"/>
                        <div class="right-username">
                            <button onclick="loginPop();" id="login">Đăng nhập</button>
                        </div>
                    </div>
                </li>';
                ?>
                <li style="float:right;">
                    <div class="right-bag">
                        <button style="background-color: white; border:0px"><img    src="styles/img/Bag.png">
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
                            <li id="padd"><a href="#home">Trang chủ</a></li>
                            <li id="padd" ><a href="#news">Cửa hàng</a></li>
                            <li id="padd"><a href="#contact">Mới</a></li>
                                <li id="padd"><a href="#contact">Bán chạy</a>   </li>
                        <li><a href="#about">Xem nhiều</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <div class="modal-login" id="login-info" style="display:none;">
            <div class="modal-content">
                <div class="modal-body">
                    <div id="modal-body-title">
                        <p style="font-size:24px;"><b>Đăng nhập</b></p>
                        <p style="font-size:14px;">Bạn chưa có tài  khoản? <a href="#" style="color:#e83b4f;">Đăng ký</a></p>
                    </div>
                    <div id="modal-body-content">
                        <form action="login.php" method="post">
                        <table style="border:0px;font-size:14px;">
                            <tr>
                                <td>
                                    <p><b>Tài khoản</b></p>
                                </td>
                                <td style="padding:5px 0px 5px 50px;">
                                    <input name="txtUser" type="text">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><b>Mật khẩu</b></p>
                                </td>
                                <td style="padding:5px 0px 5px 50px;">
                                    <input name="txtPass" type="text">
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td style="padding:5px 0px 5px 50px;">
                                    <input type="submit" name="submit" value="Đăng nhập">
                                </td>
                            </tr>
                        </table>
                        </form>
                    </div>
                    <div class="modal-body-foot">
                        <p style="font-size:12px;">Quên mật khẩu?       <a href="#" style="color:#e83b4f;">Nhấn vào     đây</a></p>
                    </div>
                </div>
            </div>
            <div class="modal-register" id="register-info" style="display:none">
                <div class="modal-content">
                    <div class="modal-body">
                        <div id="modal-body-title">
                            <p style="font-size:24px;"><b>Đăng kí</b>   </p>
                            <p style="font-size:14px;">Bạn đã có tài    khoản? <a href="#" style="color:#e83b4f;">Đăng nhập</a></p>
                        </div>
                        <div id="modal-body-content">
                            <form action="">
                                <table style="border:0px;font-size:14px;">
                                    <tr>
                                        <td>
                                            <p><b>Tài khoản</b></p>
                                        </td>
                                        <td style="padding:5px 0px 5px 30px;">
                                            <input type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><b>Họ tên</b></p>
                                        </td>
                                        <td style="padding:5px 0px 5px 30px;">
                                            <input type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><b>Mật khẩu</b></p>
                                        </td>
                                        <td style="padding:5px 0px  5px 30px;">
                                            <input type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><b>Nhập lại mật khẩu</b></p>
                                        </td>
                                        <td style="padding:5px 0px  5px 30px;">
                                            <input type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><b>Email</b></p>
                                        </td>
                                        <td style="padding:5px 0px 5px  30px;">
                                        <input type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><b>Ngày sinh</b></p>
                                        </td>
                                        <td style="padding:5px 0px 5px 30px;">
                                            <input type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><b>Địa chỉ</b></p>
                                        </td>
                                        <td style="padding:5px 0px 5px 30px;">
                                            <input type="text" style="height:50px;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td style="padding:5px 0px 5px 30px;">
                                            <input type="submit"    value="Đăng kí">
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                        <div class="modal-body-foot">
                            <p style="font-size:12px;">Khi bạn nhấn Đăng ký, bạn đã đồng ý thực hiện mọi giao dịch mua bán theo <a href="#" style="color:#e83b4f;">điều kiện sử dụng và chính sách của HiTech1 Shop.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-bag" id="bag-info" style="display:none">
        <div class="modal-bag-content">
            <div class="modal-bag-body">
                <div class="modal-bag-body-tile">
                    <p><b style="font-size:24px;padding-left:35px;">Giỏ hàng</b></p>
                    <ul>
                        <li style="padding-right:250px;">
                            <p>Sản phẩm</p>
                        </li>
                        <li style="padding-right:70px;">
                            <p>Size</p>
                        </li>
                        <li style="padding-right:40px;">
                            <p>Số lượng</p>
                        </li>
                        <li style="padding-right:70px;">
                            <p>Giá</p>
                        </li>
                    </ul>
                </div>
                <hr>
                <div class="modal-bag-body-content">
                    <ul>
                        <li>
                            <div class="bag-img">
                                <img src="images/product-1.png">
                            </div>
                            <div style="width:250px;        padding:30px 0px 0px 60px;"><p><b>Áo thun   có cổ không viền</b></p></div>
                        </li>
                        <li style="padding:0px 0px 0px  10px;">
                            <div style="width:100px;padding-top:30px;">
                                <select style="width:50px;height:25px;">
                                    <option value="sizeS">
                                        S
                                    </option>
                                    <option value="sizeM">
                                        M
                                    </option>
                                    <option value="sizeL">
                                        L
                                    </option>
                                    <option value="sizeXL">
                                        XL
                                    </option>
                                </select>
                            </div>
                        </li>
                        <li>
                            <div style="width:100px;padding-    top:30px;">
                                <input type="text" style="width:50px;height:20px;">
                            </div>
                        </li>
                        <li style="padding-right:29px;">
                            <div style="width:140px;padding-    top:30px;">
                                <p><b>590.000 VNĐ</b></p>
                            </div>
                        </li>
                        <li>
                            <div style="width:100px;padding-top:30px;float:right;">
                                <button     style="width:35px;height:25px;border:0px;background-color:white;"><img  src="styles/img/refresh.png">
                                </button>
                                <button style="width:35px;height:25px;border:0px;background-color:white;padding:0px 10px;"><img src="styles/img/delete.png"></button>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="modal-bag-body-content">
                    <ul>
                        <li>
                            <div class="bag-img">
                                <img src="images/product-1.png">
                            </div>
                            <div style="width:250px;    padding:30px 0px 0px 60px;"><p><b>Áo thun có cổ không viền</b></p></div>
                        </li>
                        <li style="padding:0px 0px 0px 10px;">
                            <div style="width:100px;padding-top:30px;">
                                <select     style="width:50px;height:25px;">
                                    <option value="sizeS">
                                        S
                                    </option>
                                    <option value="sizeM">
                                        M
                                    </option>
                                    <option value="sizeL">
                                        L
                                    </option>
                                    <option value="sizeXL">
                                        XL
                                    </option>
                                        </select>
                                    </div>
                        </li>
                        <li>
                            <div style="width:100px;padding-        top:30px;">
                                <input type="text"  style="width:50px;height:20px;">
                            </div>
                        </li>
                        <li style="padding-right:29px;">
                            <div style="width:140px;padding-    top:30px;">
                                <p><b>590.000 VNĐ</b></p>
                            </div>
                        </li>
                        <li>
                            <div style="width:100px;padding-    top:30px;float:right;">
                                <button     style="width:35px;height:25px;border:0px;background-color:white;"><img src="styles/img/refresh.png">
                                </button>
                                <button style="width:35px;height:25px;border:0px;background-color:white;padding:0px 10px;"><img src="styles/img/delete.png"></button>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="modal-bag-body-content">
                    <ul>
                        <li>
                            <div class="bag-img">
                                <img src="images/product-   1.png">
                            </div>
                            <div style="width:250px; padding:30px 0px 0px 60px;"><p><b>Áo thun có cổ không viền</b></p></div>
                        </li>
                        <li style="padding:0px 0px 0px  10px;">
                            <div style="width:100px;padding-    top:30px;">
                                <select style="width:50px;height:25px;">
                                    <option value="sizeS">
                                        S
                                    </option>
                                    <option value="sizeM">
                                        M
                                    </option>
                                    <option value="sizeL">
                                        L
                                    </option>
                                    <option value="sizeXL">
                                        XL
                                    </option>
                                </select>
                            </div>
                        </li>
                        <li>
                            <div style="width:100px;padding-top:30px;">
                                <input type="text"      style="width:50px;height:20px;">
                            </div>
                        </li>
                        <li style="padding-right:29px;">
                            <div style="width:140px;padding-        top:30px;">
                                <p><b>590.000 VNĐ</b></p>
                            </div>
                        </li>
                        <li>
                            <div style="width:100px;padding-    top:30px;">
                                <button     style="width:35px;height:25px;border:0px;background-color:white;"><img src="styles/img/refresh.png">
                                </button>
                                <button style="width:35px;height:25px;border:0px;background-color:white;padding:0px 10px;"><img src="styles/img/delete.png"></button>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="modal-bag-body-footer">
                    <div class="bag-footer-text">
                        <p><b>Tổng tiền: </b><b style="color:#e83b4f;font-size:24px;">1.360.000 VNĐ</b></p>
                    </div>
                    <div class="bag-footer-button">
                        <button>Thanh toán</button>
                    </div>
                </div>
            </div>
        </div> 
    </div>
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
    

    <div class="container">
        <div class="container-nav wrapper">
            <ul>
                <li id="padd1"><a href="#">Sản phẩm</a></li>
                <li id="padd1"><a href="#">Loại sản phẩm</a></li>
                <li id="padd1"><a href="#">Nhà sản xuất</a></li>
                <li id="padd1"><a href="#">Đơn đặt hàng</a></li>
                <li id="padd1"><a href="#">Người dùng</a></li>
                <li style="float:right;font-size: 18px;"><a href="#">Thống kê</a></li>
            </ul>
        </div>
    </div>
    <div class="container-content" >
            <div class="wrapper">
                <span>Quản lý sản phẩm</span>
            </div>
            
        </div>
    <!--    Xử lý ngay chỗ này-->
    <div class="wrapper content">
        <p>Xử lý ngay chỗ này</p>
    </div>
    <div class="article">
        <div class="container-na" >
            <div class="wrapper">
                <div class="btngroup" style="width:auto;height:auto;">
                    <button>&rang;</button>
                    <button>&lang;</button>
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
    <div class="footer-wrapper">
        <hr style="height:1px; border:none; background-color:#c8c8c8;margin: 0 auto 0 0;">
    </div>
    <div class="wrapper footer">
        <div class="footer-left" style="width: 40%;float: left;">
            <div class="footer-logo">
                <img src="styles/img/logo.png">
            </div>
            <div class="payment">
                <img src="styles/img/visa.png" style="margin-right:15px;">
                <img src="styles/img/masterCard.png">
            </div>
        </div>
        <div class="footer-right" style="width: 60%;float: right;">
            <ul>
                <li id="right-al">
                    <div style="font-weight:bold;font-size:18px;">Thông tin</div>
                    <div style="padding-top:10px;"><a href="#">Thông tin về HiTech1Shop</a>
                    </div>
                    <div style="padding-top:10px;"><a href="#">Tuyển dụng</a></div>
                    <div style="padding-top:10px;"><a href="#">Blog HiTech1Shop</a></div>
                </li>
                <li id="right-al">
                    <div style="font-weight:bold;font-size:18px;">FAQ</div>
                    <div style="padding-top:10px;"><a href="#">Chính sách đặt hàng</a>
                    </div>
                    <div style="padding-top:10px;"><a href="#">Chính sách đổi trả hàng</a></div>
                    <div style="padding-top:10px;"><a href="#">Hình thức vận chuyển</a></div>
                    <div style="padding-top:10px;"><a href="#">Ưu đãi thành viên</a></div>
                    <div style="padding-top:10px;"><a href="#">Đối tác cung cấp</a></div>
                </li>
                <li id="right-al">
                    <div style="font-weight:bold; font-size:18px;">Liên hệ</div>
                    <div style="padding-top:10px;">     <a href="tel:+841629594513" style="font-weight:bold;">01629594513</a>
                    </div>
                    <div style="padding-top:10px;">     <a href="mailto:hitech1group@gmail.com?Subject=Xin chào bạn đến với Hitech1 Shop">hitech1group@gmail.com</a>
                    </div>
                    <div style="padding-top:10px;">     <img src="styles/img/icofb.png">
                        <img src="styles/img/icoInstagram.png" style="margin-left:22px;">
                        <img src="styles/img/icoGoogle.png" style="margin-left:22px;">
                        <img src="styles/img/icoSkype.png" style="float:right">
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div>
        <hr style="height:1px; border:none; background-color:#c8c8c8;margin: 0 auto 0 0;">
    </div>
    <div class="wrapper" style="text-align:center;padding:15px;"><p>HiTech1shop.com &copy; Copyright 2016. University of Science HoChiMinh City</p></div>
</body>
</html>