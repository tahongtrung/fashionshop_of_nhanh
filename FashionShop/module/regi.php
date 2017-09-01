
<!--Nội dung box đăng kí-->
<div class="modal-register" id="register-info" style="display:none;">
    <div class="modal-content">
        <div class="modal-body">
            <div id="modal-body-title">
                <p style="font-size:24px;"><b>Đăng kí</b>   </p>
                <p style="font-size:14px;">Bạn đã có tài khoản? <button onclick="loginPop();" style="color:#e83b4f;border:0px;background-color:white;width:80px;height:17px;font-size:14px;">Đăng nhập</button></p>
            </div>
             <?php
                if(isset($_SESSION['userError']))
                {?>
                 <p style="font-size:14px; color:#e83b4f"><?php echo $_SESSION['userError'];?></p>  
                <?php
                } if(isset($_SESSION['mailError'])){?>
                <p style="font-size:14px; color:#e83b4f"><?php echo $_SESSION['mailError'];?></p>
                <?php } 
                if(isset($_SESSION['passError'])){?>
                <p style="font-size:14px; color:#e83b4f"><?php echo $_SESSION['passError'];?></p>
                <?php } ?>
            <div id="modal-body-content">
                <form action="register.php" method="post" name="register">
                    <table style="border:0px;font-size:14px;">
                        <tr>
                            <td>
                                <p><b>Tài khoản <b style="color:#e83b4f;">*</b></b></p>
                            </td>
                            <td style="padding:5px 0px 5px 30px;">
                                <input  type="text" name="txtUserName">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><b>Họ tên</b></p>
                            </td>
                            <td style="padding:5px 0px 5px 30px;">
                                <input type="text" name="txtFullName">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><b>Mật khẩu<b style="color:#e83b4f;"> *</b></b></p>
                            </td>
                            <td style="padding:5px 0px  5px 30px;">
                                <input  type="text" name="txtPassword">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><b>Nhập  lại mật khẩu<b style="color:#e83b4f;"> *</b></b></p>
                            </td>
                            <td style="padding:5px 0px  5px 30px;">
                                <input  type="text" name="txtRePassword">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><b>Email<b style="color:#e83b4f;"> *</b></b></p>
                            </td>
                            <td style="padding:5px 0px 5px  30px;">
                                <input type="email" name="txtEmail" style="width: 240px;height: 25px;" id="email">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><b>Số điện thoại <b style="color:#e83b4f;">*</b></b></p>
                            </td>
                            <td style="padding:5px 0px 5px 30px;">
                                <input type="text" name="txtPhone">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><b>Ngày sinh</b></p>
                            </td>
                            <td style="padding:5px 0px 5px 30px;">
                                <input type="date" name="txtBirthday" value="2016-06-02" style="width: 240px;height: 25px;font-size:14px;">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><b>Địa chỉ</b></p>
                            </td>
                            <td style="padding:5px 0px 5px 30px;">
                                <textarea cols="38" rows="5" name="txtAddress" style="border: 1px solid #c8c8c8"></textarea>
                                                
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="padding:5px 0px 5px 30px;">
                                <input  type="submit" value="Đăng kí" name="submit">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="modal-body-foot">
                <p style="font- size:12px;">Khi bạn nhấn Đăng ký, bạn đã đồng ý thực hiện mọi giao dịch mua bán theo <a href="#" style="color:#e83b4f;">điều kiện sử dụng và chính sách của HiTech1 Shop.</a></p>
            </div>
        </div>
    </div>
</div>