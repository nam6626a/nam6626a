<?php
if(isset($_POST['addCart'])){
   $product_img = $_POST['productImg'];
   $product_name = $_POST['productName'];
   $price = $_POST['price'];
}
 ?>
<div class="modal">
    <div class="modal__overlay">
        
    </div>
     <div class="modal__body">
        
            <!-- Authen form -->

        <div class="auth-form">
                <div class="auth-form__container">
                    <div class="modal__inner">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Đăng ký </h3>
                        <span class="auth-form__switch switch1">Đăng Nhập </span>
                    </div>
                    <div class="auth-form__form">
                        <div class="auth-form-group">
                            <input type="text" placeholder="Số điện thoại">
                        </div> 
                        <div class="auth-form-group">
                            <input type="password" placeholder="Mật Khẩu">
                        </div>
                        <div class="auth-form-group auth-form-more ">
                            <input  type="text" placeholder="Mã xác minh">
                            <input class="auth-form__input" type="submit" name="" id="" value="Nhận mã ">
                        </div>
                    </div>
                    <div class="auth-form__aside">
                        <p>Băng việc đăng ký, bạn đã đồng ý với Shopee về
                            <a href="">Điều khoản dịch vụ </a> &
                            <a href="">Chính sách bảo mật </a>
                        </p>
                    </div>
                    <div class="auth-form__control">
                        <button class="btn close">Trở lại </button>
                        <button class="btn btn-primary">Đăng Ký </button>
    
                    </div>
                 </div>
            </div>
                <div class="auth-form__socials">
                    <a href="" class=" btn__with-iconfacebook ">
                        <i class="fa-brands fa-facebook" style="color: #f5f6f8;"></i>
                       <span> kết nối với Facebook </span>
                    </a>
                    <a href="" class=" btn__with-iconGoogle">
                        <i class="fa-brands fa-google"></i> 
                       <span> kết nối với Google </span>
                    </a>
                </div>
         </div>
           
            <div class="auth-form__login">
                <div class="auth-form__container">
                    <div class="modal__inner">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Đăng nhập </h3>
                        <span class="auth-form__switch switch2">Đăng ký  </span>
                    </div>
                    <div class="auth-form__form">
                        <div class="auth-form-group">
                            <input type="text" placeholder="Số điện thoại">
                        </div> 
                        <div class="auth-form-group">
                            <input type="password" placeholder="Mật Khẩu">
                        </div>
                    </div>
                    <div class="auth-form__aside auth-form__help">
                       <a href="" class="auth-form__link">Quên mật khẩu</a>
                       <span class="auth-form__separate"></span>
                       <div>
                       <a href="" class="auth-form__question">Cần trợ giúp </a>
                       <i class="fa-solid fa-circle-question" style="color: #d1d1d1;"></i>
                    </div>
                    </div>
                    <div class="auth-form__control">
                        <button class="btn close"> Trở lại </button>
                        <button class="btn btn-primary">Đăng Nhập </button>
    
                    </div>
                 </div>
            </div>
                <div class="auth-form__socials">
                    <a href="" class=" btn__with-iconfacebook ">
                        <i class="fa-brands fa-facebook" style="color: #f5f6f8;"></i>
                       <span> kết nối với Facebook </span>
                    </a>
                    <a href="" class=" btn__with-iconGoogle">
                        <i class="fa-brands fa-google"></i> 
                       <span> kết nối với Google </span>
                    </a>
                </div>
            </div>
    </div>

    
    <div class="Cart-add">
        <div class="modal-cart">
        <div class="modal-cart-product" style="margin-bottom: 16px;">
                 <table style="width: 100%; text-align: center; border: 1px solid #333;" >
                    <thead>
                        <tr>
                            <th>Sản Phẩm</th>
                            <th></th>
                            <th>Đơn Giá</th>
                            <th>Số Lượng</th>
                            <th>Thành Tiền</th>
                        </tr>
                    </thead>
                    <tbody > 
                       
                        <tr >
                        <?php 
                         
                        
                        ?> 
                            <td ><img style="max-width: 80px;" src="./admin/public/img/<?php echo $product_img?>" alt=""></td>
                            <td><?php echo $product_name ?></td>
                            <td><b><?php echo $price ?></b></td>
                            <td><input style="max-width: 100px; padding-left: 8px;" type="number" name="" id=""></td>
                            <td><b>940,500</b></td>
                            <?php  ?>
                        
                        </tr>
               
                    </tbody>
                    <tbody >  
                        <tr >
                           
                            <td ><img style="max-width: 80px;" src="../access/img/sp1.jpeg" alt=""></td>
                            <td>DC milky Way VN2</td>
                            <td><b>313,500</b></td>
                            <td><input style="max-width: 100px; padding-left: 8px;" type="number" name="" id=""></td>
                            <td><b>940,500</b></td>
                       
                        </tr>
                
                    </tbody>   <tbody >  
                        <tr >
                           
                            <td ><img style="max-width: 80px;" src="../access/img/sp1.jpeg" alt=""></td>
                            <td>DC milky Way VN2</td>
                            <td><b>313,500</b></td>
                            <td><input style="max-width: 100px; padding-left: 8px;" type="number" name="" id=""></td>
                            <td><b>940,500</b></td>
                       
                        </tr>
                
                    </tbody>
               
                 </table>
                
        </div>
        <div class="modal-cart-origin">
            <div style="text-align: end;">
                <span>Tạm tính:</span>
            </div>
            <div style="text-align: end;">
                <button>Tiếp tục mua hàng</button>
                <button>Thanh toán ngay</button>
            </div>
        </div>
        </div>
    </div>
</div>