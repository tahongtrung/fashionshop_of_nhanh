<div>
                    <p style="font-size:24px;"><b>Cửa hàng</b></p>
                </div>
                <div style="padding-top:20px;">
                    <p><b>Loại sản phẩm</b></p>
                    <div  class="cate-text">
                        <?php                       while($row=mysqli_fetch_assoc($result)){?>
                        <a href="category.php?type=<?php echo $row['category_code'];?>#viewPD">
                            <p><?php echo $row['category_name']; ?>
                            </p></a>
                        <?php } ?>
                    </div>
                    
                </div>
                <div style="padding-top:20px;">
                    <p><b>Nhà sản xuất</b></p>
                    <div  class="cate-text">
                        <?php                       while($row=mysqli_fetch_assoc($result1)){
                        ?>
                        <a href="manufacture.php?mf=<?php echo $row['mf_code'];?>#viewPD">
                            <p><?php echo $row['mf_name']; ?>
                            </p></a>
                        <?php } ?>
                    </div>
                </div>
                <div style="padding-top:20px;">
                    <p><b>Size</b></p>
                    <div  class="cate-text">
                        <form action="size.php" method="post" name="size">
                            <input type="checkbox" name="checkSize" value="S" onclick="document.forms.size.submit();" style="width:30px;heigth:20px;"><label>S</label>
                            <input type="checkbox" name="checkSize" value="M" onclick="document.forms.size.submit();" style="width:30px;heigth:20px;"><label>M</label>
                            <br>
                            <input type="checkbox" name="checkSize" value="L" onclick="document.forms.size.submit();"    style="width:30px;heigth:20px;"><label>L</label>
                            <input type="checkbox" name="checkSize" value="XL" onclick="document.forms.size.submit();" style="width:30px;heigth:20px;"><label>XL</label>
                        </form>
                    </div>
                </div>
                <div style="padding-top:20px;">
                    <p><b>Giá tiền (VNĐ)</b></p>
                    <div  class="cate-text">
                        <a href="price.php?price1=<100#viewPD"><p>Dưới 100 </p></a>
                        <a href="price.php?price2=100-300#viewPD"><p>Từ 100 đến 300</p></a>
                        <a href="price.php?price3=300-500#viewPD"><p>Từ 300 đến 500</p></a>
                        <a href="price.php?price4=>500#viewPD"><p>Trên 500</p></a>
                    </div>
                </div>