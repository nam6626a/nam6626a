<div class="banner aspect-ratio-169">
        <img src="<?=dn?>/access/img/banner.jpeg" alt="">
        <img src="<?=dn?>/access/img/banner2.jpg" alt="" >
        <img src="<?=dn?>/access/img/banner3.jpg" alt="" >
        <img src="<?=dn?>/access/img/banner4.jpg" alt="">
        <img src="<?=dn?>/access/img/banner5.jpg" alt="">
    </div>
<div class="container">
        <div class="grid wide1" >
            <div class="content-head col l-12">
                <h3>Top Sản Phẩm Bán Chạy</h3>
            </div>
            <div class="row ">
                <!-- <div class="col l-2-4 m-0 c-0 ">
                        <nav class="category">
                            <div class="category-icon">
                                 <i class="fa-solid fa-bars"></i>
                                <h3 class="category-heading">Danh mục</h3>
                            </div>
                        <ul class="category-list">
                            <li class="category-item category-item-active">
                                <a href="" class="category-item__link">Sản phẩm</a>
                            </li>
                            <li class="category-item">
                                <a href="" class="category-item__link">Điện thoại </a>
                            </li>
                            <li class="category-item">
                                <a href="" class="category-item__link">Máy tính bảng</a>
                            </li>
                            <li class="category-item">
                                <a href="" class="category-item__link">Pin dự phòng</a>
                            </li>
                        </ul>
                    </nav>
                    <nav class="category">
                        <div class="category-icon">
                            <i class="fa-solid fa-filter"></i>
                            <h3 class="category-heading">Bộ lọc</h3>
                        </div>
                    <ul class="category-list">
                        <li class="category-item category-item-active">
                           
                            <a href="" class="category-item__link">Theo danh mục</a>
                        </li>
                        <li class="category-item">
                            <input type="checkbox" name="" id="">
                            <a href="" class="category-item__link">chuột và bàn phím (+299k) </a>
                        </li>
                        <li class="category-item">
                            <input type="checkbox" name="" id="">
                            <a href="" class="category-item__link">Thiết bị mạng (124k+)</a>
                        </li>
                        <li class="category-item">
                            <input type="checkbox" name="" id="">
                            <a href="" class="category-item__link">máy in và máy scan (134k+)</a>
                        </li>
                    </ul>
                </nav>
                    </div> -->
                   
                    <div class="col l-12 m-12 c-12 ">
                        <!-- <div class="home-filter hide-on-moblie-tablet">
                            <span class="home-filter-label">sắp xếp theo</span>
                            <button class="btn">phổ biến </button>
                            <button class="btn btn-primary">mới nhất </button>
                            <button class="btn">bán chạy </button>
                            <div class="select-input">
                                <span for="" class="select-input-label">Giá</span>
                                <i class="fa-solid fa-angle-down"></i>
                                <ul class="sel-input-list">
                                   <li class="input-item"><a href="">Giá thấp đến cao</a></li>
                                   <li  class="input-item"><a href=""> Giá cao đến thấp</a></li>
                                </ul>
                            </div>
                            <div class="home-filter-page">
                                <span class="page-number">1/
                                    14</span>

                                <div class="home-filter-control">
                                    <a href="" class="home-page-button">
                                        <i class="fa-solid fa-angle-left"></i>
                                    </a>
                                    <a href="" class="home-page-button">
                                        <i class="fa-solid fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div> -->
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
                                <?php foreach($data['ab'][0] as $dl ){


                               ?>
                                <div class="col l-2-4 m-4 c-6">
                                    <a href="product?product_id=<?php echo $dl['product_id'] ?>" class="home-product-item">
                            
                                        <div name="img" style="background-image: url(<?=dn?>/admin/public/img/<?php echo $dl['product_img']; ?>);" class="product-item-img"> </div>
                                            <div class="product-content">
                                            <h3 class="product-name"><?php echo $dl['product_name']; ?></h3>
                                            <div class="product-price">
                                                <span class="product-price-old"><?php echo $dl['old_price'] ?></span>
                                                <span class="product-price-current"><?php echo $dl['price'] ?></span>
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
                                        <form action="">
                                            <input type="hidden" class="product_id" name="product_id" value="<?php echo $dl['product_id'] ?>">
                                            <input type="hidden" class="product_img" name="product_img" value="<?=dn?>/admin/public/img/<?php echo $dl['product_img']; ?>">
                                            <input type="hidden" class="product_name" name="product_name" value="<?=dn?>/admin/public/img/<?php echo $dl['product_name']; ?>">
                                            <input type="hidden" class="price" name="price" value="<?=dn?>/admin/public/img/<?php echo $dl['price']; ?>">
                                        </form>
                                        <button onclick="addToCart()" name="addCart" class="btn-cartAdd"> Thêm Vào Giỏ Hàng </button>
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
                                <?php   } 
                                  ?>
                            </div>
                        </div>
                        <div class="pagination">
                            <ul class="pagination-item">
                            <i class="fa-solid fa-angle-left"></i>
                            <?php foreach($data['ab'][1] as $cd ){ 
                                    if($cd != ""){
                                ?>
                                  <?php echo $cd ?> 
                                  
                                    <!-- <a href="" class="pagination-item__link">1</a>
                                    <a href="" class="pagination-item__link">3</a>
                                    <a href="" class="pagination-item__link">4</a>
                                    <a href="" class="pagination-item__link">5</a>
                                    <a href="" class="pagination-item__link">...</a> -->

                                   
                                    <?php }
                                     }?>
<!-- <script>
                        let u = document.currentScript.parentElement;
                                
                             if(sessionStorage.getItem('at') === null){
                                u.children[0].classList.add('pageActive');
                                                                     }
                                else{
                                        let x = u.querySelector('.pageActive');
                                if(x != null){
                                        x.classList.remove('pageActive')
                                            }
                                    let p = u.children[parseInt(sessionStorage.getItem('at'))];
                               
                                    p.classList.add('pageActive');
            }
</script> -->
                                      <i class="fa-solid fa-angle-right"></i>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </div>
   