<div class="product">
    <div class="grid wide">
        <div class="row">
            <ul class="switch-link">
                <li><a href="">Trang chủ </a><i class="fa-solid fa-caret-right"></i></li>
                <li><a href="">Trang sức bạc</a><i class="fa-solid fa-caret-right"></i></li>
                <li><a href="">Dây chuyền</a></li>
            </ul>
        </div>
        <?php foreach($data['dl'] as $dl )
        { ?>
    <div class="row">
        <div style="padding: 2px;" class="col l-1 m-0 c-0">
            <div style="background-image: url(../admin/public/img/<?php echo $dl['product_img'] ?>);" class="small-img"></div>
        </div>
        <div class="col l-4 m-12 c-12 block-img">
            <div style="background-image: url(../admin/public/img/<?php echo $dl['product_img'] ?>);" class="img"></div>
        </div>
        <div class="col l-4 m-12 c-12">
           <div class="info-product">
            <div class="title-content">
                    <h4><?php echo $dl['product_name'] ?></h4>
            </div>

            <div class="text-content-sp">
                    <p>Mã SP: DC700</p>
                    <p> <span>1018</span> Lượt mua</p>
            </div>

           <div class="price">
                     <h1><?php echo $dl['price'] ?> <sup>đ</sup></h1>
                     <p> Giá cũ: <span><?php echo $dl['old_price'] ?> <sup>đ</sup></span> </p>
           </div>

           <div class="quantity">
                <p>Số lượng:</p>
                <input type="number" value="1">
           </div>
        </div>
           <div class="buy-btn">
            <button  class="btn-cartAdd">
                Thêm vào giỏ hàng
            </button>
            <button>
                <a style="text-decoration: none; color: white; " href="checkout.php">
                Mua ngay <br> <p>Mua online giao hàng tận nhà </p>
            </a>
            </button>
           </div>
           <div class="share">
                <div class="likeFB">
                    <i class="fa-solid fa-thumbs-up"></i>
                    <p>Thích</p>
                    <p>0</p>
                </div>
                <div class="likeFB sh">
                   <p>chia sẻ</p>
                </div>
           </div>
        </div>
        <div class="col l-3 m-12 c-12">
            <div class="more-info">
                <div style="padding: 12px 8px;">
                    <h4>Sẽ có tại nhà bạn </h4>
                    <p>từ 1 đến 5 ngày làm việc </p>
                </div>
                <div style="text-align: center; line-height: 50px;">
                    <h5>Giao hàng toàn quốc</h5>
                </div>
                <div style="display: flex; padding: 12px 8px;">
                    <img src="../access/img/doitra.jpg" alt="">
                   <span style="margin-left: 8px;">
                    <h5>Đổi trả miễn phí</h5>
                    <p>1 đổi 1 do lỗi nhà sản xuất</p>
                </span>
                </div>
                <div style="display: flex; padding: 12px 8px;">
                    <img src="../access/img/pay.jpg" alt="">
                    <span style="margin-left: 8px;">
                    <h5>Thanh toán </h5>
                    <p>Thanh toán khi nhận hàng </p>
                </span>
                </div>
                <div style="display: flex; padding: 12px 8px;">
                    <img src="../access/img/phone.jpg" alt="">
                    <span style="margin-left: 8px;">
                    <h5>Hỡ Trợ Mua Nhanh </h5>
                    <h5>0971269617</h5>
                    <p>Từ 8:30 - 22:00 Mỗi Ngày</p>
                </span>
                </div>
            </div>
        </div>

    </div>
    <?php }?>
</div>