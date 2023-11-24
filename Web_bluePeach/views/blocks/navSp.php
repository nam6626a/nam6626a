<div class="col l-2 m-0 c-0 ">
                        <nav class="category">
                            <div class="category-icon">
                                 <i class="fa-solid fa-bars"></i>
                                <h3 class="category-heading">Danh mục</h3>
                            </div>
                        <ul class="category-list">
                        <h4 class="category-heading">TRANG SỨC BẠC</h4>
                            <li class="category-item">
                            
                          
                                <a href="daychuyen" class="category-item__link ">Dây Chuyền</a>
                            </li>
                            <li class="category-item">
                            
                          
                                <a href="lactay" class="category-item__link">Lắc Tay</a>
                            </li>
                            <li class="category-item">
                            
                       
                                <a href="khuyentai" class="category-item__link">Khuyên Tai</a>
                            </li>
                            <script>
                                   let u = document.currentScript.parentElement;
                                   console.log(u);
                             if(sessionStorage.getItem('at') === null){
                                u.children[3].classList.add('active');
                                                                     }
                                else{
                                        let x = u.querySelector('.active');
                                if(x != null){
                                        x.classList.remove('active')
                                            }
                                    let p = u.children[parseInt(sessionStorage.getItem('at'))];
                                    console.log(sessionStorage.getItem('at'));
                                    p.classList.add('active');
            }
                            </script>
                        </ul>
                    </nav>
                    <nav class="category">
                        <div class="category-icon">
                    <h3 class="category-heading">Giá</h3>
                    </div>
                        <input type="range" value="1000000" step="1" min="0" max="1000000" name="" id="idRange">
                        <div style="display: flex; justify-content: space-between;">
                        <span class="price-to">0</span>
                        <span id="price-form">1,000,000đ</span>
                        </div>
                    <!-- <ul class="category-list">
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
                    </ul> -->
                </nav>
                    </div>