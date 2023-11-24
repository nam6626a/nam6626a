<div class="container LT">
        <div class="grid wide1" >
           
            <div class="row ">
            <?php require_once('./views/blocks/navSp.php') ?>
                   
                    <div class="col l-10 m-12 c-12 ">
                        <div class="home-filter hide-on-moblie-tablet">
                            <span class="home-filter-label">Bạn đang xem: </span>
                            <h2 style="font-weight: 300; color: blue;">Lắc tay</h2>
                           
                            <div class="home-filter-page">
                                <div class="select-input">
                                    <span for="" class="select-input-label">Mặc định </span>
                                    <i class="fa-solid fa-angle-down"></i>
                                    <ul class="sel-input-list">
                                       <li class="input-item"><a href="">Giá thấp đến cao</a></li>
                                       <li  class="input-item"><a href=""> Giá cao đến thấp</a></li>
                                    </ul>
                                </div>
                                <!-- <span class="page-number">1/
                                    14</span>

                                <div class="home-filter-control">
                                    <a href="" class="home-page-button">
                                        <i class="fa-solid fa-angle-left"></i>
                                    </a>
                                    <a href="" class="home-page-button">
                                        <i class="fa-solid fa-angle-right"></i>
                                    </a>
                                </div> -->
                            </div>
                        </div>
                        <!-- <div class="category-moblie">
                            <ul class="category-mobile-list">
                                <li class="category-mobile-item"><a href="">Thiết bị đeo thông minh </a></li>
                                <li class="category-mobile-item"><a href="">phụ kiện Tivi</a></li>
                                <li class="category-mobile-item"><a href="">Máy game console </a></li>
                                <li class="category-mobile-item"><a href="">Phụ kiện Console</a></li>
                                <li class="category-mobile-item"><a href="">Đĩa game</a></li>
                                <li class="category-mobile-item"><a href="">Linh phụ kiện </a></li>
                                <li class="category-mobile-item"><a href="">Tai nghe nhét tai </a></li>
                                <li class="category-mobile-item"><a href="">Loa </a></li>
                                <li class="category-mobile-item"><a href="">Thiết bị đeo thông minh  </a></li>
                                <li class="category-mobile-item"><a href="">phụ kiện Tivi</a></li>
                                <li class="category-mobile-item"><a href="">Máy game console </a></li>
                                
                            </ul>
                        </div> -->
                        <div class="home-product">
                            <div class="row ">
                                    <?php 
                                  
                                foreach ($data['dl'] as $dl){ 
                                   $price = str_replace(".",",",$dl['price'])
                                    ?>
                                <div class="col l-3 m-4 c-6">
                                    <a href="product?product_id=<?php echo $dl['product_id'] ?>" class="home-product-item">
                                        <div style="background-image: url(../admin/public/img/<?php echo $dl['product_img'] ?>);" class="product-item-img"> </div>
                                            <div class="product-content">
                                            <h3 class="product-name"><?php echo $dl['product_name'] ?> </h3>
                                            <div class="product-price">
                                                <span class="product-price-old"><?php echo $dl['old_price'] ?> </span>
                                                <span class="product-price-current"><?php echo $price ?> </span>
                                            </div>
                                           
                                            
                                            <!-- <div class="product-item-favourite">
                                                <i class="fa-solid fa-check"></i>
                                              <span>  yêu thích </span>
                                              
                                            </div> -->
                                            <div class="product-sale-off">
                                                <span class="product-sale-off-percent">29%</span>
                                                <span class="product-sale-off-label">GIẢM</span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="product-origin">
                                               <button class="btn-cartAdd"> Thêm Vào Giỏ Hàng</button>
                                            </div>
                                            <div class="product-item-action">
                                                <span class="product-item-like">
                                                    <i class=" heart1 fa-regular fa-heart"></i>
                                                    <i class=" heart2 fa-solid fa-heart"></i>
                                                </span>
                                                <div class="product-rating">
                                                    <i class=" fa-solid fa-star"></i>
                                                    <i class=" fa-solid fa-star"></i>
                                                    <i class=" fa-solid fa-star"></i>
                                                    <i class=" fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                                <span class="product-sold">88 đã bán </span>
                                            </div>
                                </div>
                                <?php }?>
                    
                            </div>
                        </div>
                        <div class="pagination">
                            <li class="pagination-item">
                                    <i class="fa-solid fa-angle-left"></i>
                                    <a href="" class="pagination-item__link">1</a>
                                    <a href="" class="pagination-item__link">2</a>
                                    <a href="" class="pagination-item__link">3</a>
                                    <a href="" class="pagination-item__link">4</a>
                                    <a href="" class="pagination-item__link">5</a>
                                    <a href="" class="pagination-item__link">...</a>
                                    <i class="fa-solid fa-angle-right"></i>
                        </li>
                        </div>
                    </div>
                </div>
            </div>
   
</div>