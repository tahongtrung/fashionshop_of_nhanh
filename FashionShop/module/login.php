<!--Nội dung box đăng nhập-->
<div class="modal-login" id="login-info" style="display:none;">
    <div class="modal-content">
        <div class="modal-body">
            <div id="modal-body-title">
                <p style="font-size:24px;"> <b>Đăng nhập</b></p>
                <p style="font-size:14px;">Bạn chưa có tài khoản? <button onclick="resiPop();" style="color:#e83b4f;border:0px;background-color:white;width:60px;height:17px;font-size:14px;">Đăng ký</button></p>
            </div>
            <div id="modal-body-content">
<!--                        <p style="font-size:12px;color:#e83b4f">Tài khoản hoặc Mật khẩu chưa chính xác! Xin vui lòng đăng nhập lại</p>-->
                <form action="login.php" method="post">
                    <table style="border:0px;font-size:14px;">
                        <tr>
                            <td>
                                <p><b>Tài khoản</b> </p>
                            </td>
                            <td style="padding:5px 0px  5px 50px;">
                                <input name="txtUser" type="text" autofocus>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><b>Mật khẩu</b></p>
                            </td>
                            <td style="padding:5px 0px 5px 50px;">
                                <input  name="txtPass" type="password" style="width: 240px;height: 25px;">
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
                <p style="font-size:12px;">Quên mật khẩu?<a href="#" style="color:#e83b4f;">Nhấn vào     đây</a></p>
            </div>
        </div>
    </div>
</div>