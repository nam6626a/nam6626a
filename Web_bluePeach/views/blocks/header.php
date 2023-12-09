<?php 
    require_once('./models/Category_class.php');
    $dt = new Category_class;
    $result = $dt->GetDM();
?>
<div class="header"> 
        <div class="grid wide" >
            <div class="header-with-search">
                <div class="open-header-search">
                <i class="fa-solid fa-magnifying-glass search__btn-icon "></i>
            </div>
            <div class="nav-mobile">
                <i class="fa-solid fa-bars"></i>
            </div>
                <header class="header-logo">
                    <img class="header-logo-img" alt="Logo" src="https://pos.nvncdn.net/1cdfdd-38070/store/20181210_NfSYjqRWuwFkURp6Lc8QAfdU.png">
                </header>
                <div class="header-search">
                    
                    <div class="header__search-wrap ">
                        <input type="text" class="header-search__input" placeholder="tìm kiếm ">
                        <button class="header__search-btn  abc">
                            <i class="fa-solid fa-magnifying-glass search__btn-icon"></i>
                            </button>
                        <div class="header-search__history">
                            <h3 class="search-history-heading">Lịch sử tìm kiếm </h3>
                            <ul class="history-list">
                                <li class="search__history-item"><a href="">Kem dưỡng da </a></li>
                                <li class="search__history-item"><a href="">kem trị mụn </a></li>
                                <li class="search__history-item"><a href=""></a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- <div class="search-select">
                    <span>
                        Trong shop
                    </span>
                    <i class="fa-solid fa-angle-down"></i>
                    <ul class="hd-search-option">
                        <li class="option-item active">
                            <span>Trong shop</span>
                            <i class="fa-solid fa-check"></i>
                        </li>
                        <li class="option-item">
                            <span>ngoài shop </span>
                            <i class="fa-solid fa-check"></i>

                        </li>
                    </ul>
                  
                   </div> -->
                </div>

                <div class="contact hide-on-moblie-tablet">
                    <i class="fa-solid fa-phone"></i>
                    <span>Hotline:</span>
                    <span>0971269617</span>
                </div>

                <ul class=" navbar_list-log hide-on-moblie-tablet">
                <li class="separate"><a class="strong nav-link " id="register" href="#">Đăng Ký </a></li>
                <li><a class="strong nav-link  log-in" href="#">Đăng nhập</a></li>
            </ul>

                <!-- cart-layout -->
                <div class="header-cart">
                    <a href="cart">
                    <i class="fa-solid fa-cart-shopping cart-icon"></i>
                </a>
                    <!-- <span class="cart-notice">3</span> -->
                    <div class="abcz">
                    <div class="cart-list no-cart">
                       <img class="no-cart-img" src="./accsets/img/nocart.jpg" alt="">
                       <span class="no-cart-mess">Chưa có sản phẩm</span>
                    </div>
                </div>
                <div class="bcaz">
                    <div class="cart-list2" >
                        <h4 class="header-cart__heading">Sản phẩm đã thêm</h4>
                        <ul class="header-cart__list-item">
                            <!-- cart-item -->
                            <li class="header-cart-item">
                                <img src="./accsets/img/anh1.jfif" alt="" class="header-cart__img">
                                <div class="cart-item-info">
                                    <div class="item-head">
                                        <h5 class="item-name">Cáp sạc nhanh Essage Type C 60W/100W cho Samsung S22 S21 Ultra Xiaomi Mi 12 </h5>
                                        <div>
                                        <span class="item-price">2.000.000đ</span>
                                        <span class="item-multiply">x</span>
                                        <span class="item-qnt">2</span>
                                    </div>
                                    </div>
                                    <div class="item-body">
                                        <span class="item-description">
                                            phân loại: Điện tử 
                                        </span>
                                        <span class="item-remove">
                                            Xóa 
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li class="header-cart-item">
                                <img src="./accsets/img/anh2.jfif" alt="" class="header-cart__img">
                                <div class="cart-item-info">
                                    <div class="item-head">
                                        <h5 class="item-name">Áo khoác hoodie zip chất nỉ cotton dáng rộng dày dặn phối dây kéo có mũ trùm phong cách đường phố Hàn Quốc  </h5>
                                        <span class="item-price">2.000.000đ</span>
                                        <span class="item-multiply">x</span>
                                        <span class="item-qnt">2</span>
                                    </div>
                                    <div class="item-body">
                                        <span class="item-description">
                                            phân loại: Áo 
                                        </span>
                                        <span class="item-remove">
                                            Xóa 
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li class="header-cart-item"><img src="./accsets/img/anh4.jfif" alt="" class="header-cart__img">
                                <div class="cart-item-info">
                                    <div class="item-head">
                                        <h5 class="item-name">Quần short nam essential chất umi thể thao mặc thoáng mát</h5>
                                        <span class="item-price">2.000.000đ</span>
                                        <span class="item-multiply">x</span>
                                        <span class="item-qnt">2</span>
                                    </div>
                                    <div class="item-body">
                                        <span class="item-description">
                                            phân loại: Quần 
                                        </span>
                                        <span class="item-remove">
                                            Xóa 
                                        </span>
                                    </div>
                                </div></li>
                        </ul>
                        <a href="" class="btn btn-primary ">Xem rỏ hàng </a>
                    </div>
                </div>
                </div>
            </div>
        </div>
       
            <!-- <div class="header__short-bar">
                <ul class="short-bar-list">
                    <li class="short-bar-item active2"><div class="line"></div><a href="#">Liên quan</a></li>
                    <li class="short-bar-item"><div class="line"></div><a href="#">Mới nhất </a></li>
                    <li class="short-bar-item"><div class="line"></div><a href="#"> bán chạy</a></li>
                    <li class="short-bar-item"><div class="line"></div><a href="#"> giá </a></li>
                </ul>
            </div> -->
    </div>
    <div class="footer-nav hide-on-moblie-tablet">
        <ul class="footer-nav-list">
        <!-- <ul class="menu1"> -->
            <?php
             ($data['menu']->mn)() ;
               
             ?>
            <!-- <li class="foodter-list-item"><a href="home">Home</a></li>
            <li class="foodter-list-item ">
                <a href="#">Sản Phẩm</a>
                <ul class="sub-list-item">
                    <li ><i class="fa-solid fa-caret-right"></i><a href="daychuyen">Dây chuyền/NECKLACE</a></li>
                    <li ><i class="fa-solid fa-caret-right"></i><a href="lactay">Lắc tay/BRACELET</a></li>
                    <li ><i class="fa-solid fa-caret-right"></i><a href="khuyentai">Khuyên tai/EARRINGS</a></li>
                    <li ><i class="fa-solid fa-caret-right"></i><a href="comboQuaTang">Combo quà tặng</a></li>
                </ul>
            </li>
            <li class="foodter-list-item"><a href="">My Shopee</a></li>
            <li class="foodter-list-item"><a href="">Contact</a></li>
            <li class="foodter-list-item"><a href="">Về chúng tớ</a></li>
            <li class="foodter-list-item"><a href="">More</a></li> -->
        </ul>
    </div>
    <div class="footer-nav-overlay"></div>
    <div class="footer-nav-mobile">
        <ul class="footer-nav-list">
            <li class="foodter-list-item"><a href="home">Home</a></li>
            <li class="foodter-list-item list-sp" style="display: flex; justify-content: space-between;">
                <a href="#">Sản Phẩm</a> <i class="fa-solid fa-caret-down"></i>
            </li>
            <ul class="sub-list-item-mobile">
                <li ><i class="fa-solid fa-caret-right"></i><a href="daychuyen">Dây chuyền/NECKLACE</a></li>
                <li ><i class="fa-solid fa-caret-right"></i><a href="lactay">Lắc tay/BRACELET</a></li>
                <li ><i class="fa-solid fa-caret-right"></i><a href="khuyentai">Khuyên tai/EARRINGS</a></li>
                <li ><i class="fa-solid fa-caret-right"></i><a href="#">Combo quà tặng</a></li>
            </ul>
            <li class="foodter-list-item"><a href="#">My Shopee</a></li>
            <li class="foodter-list-item"><a href="#">Contact</a></li>
            <li class="foodter-list-item"><a href="#">Về chúng tớ</a></li>
            <li class="foodter-list-item"><a href="#">More</a></li>
        </ul>
   

</div>