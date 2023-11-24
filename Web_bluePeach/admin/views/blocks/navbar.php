

<div class="search-admin">
    <input type="text" name="" id="" placeholder="search">
</div>
        <ul class="nav-admin">
        
            <li class="nav-admin-item"><i class="fa-solid fa-house" style="color: #0f58d7;"></i><a class="admin-item-link " href="home">Dashboard</a></li>
            <li class="nav-admin-item"><i class="fa-solid fa-bars" style="color: #0561ff;"></i><a class="admin-item-link" href="category">Quản lý Danh mục </a></li>
            <li class="nav-admin-item"><i class="fa-regular fa-user" style="color: #0659ea;"></i><a class="admin-item-link" href="User">Quản lý thành viên</a></li>
            <li class="nav-admin-item"><i class="fa-solid fa-basket-shopping" style="color: #0b5fef;"></i><a class="admin-item-link" href="product">Quản lý sản phẩm</a></li>
            <li class="nav-admin-item"><i class="fa-solid fa-message" style="color: #0860f7;"></i><a class="admin-item-link" href="#">Quản lý bình luận</a></li>
            <script>
                let u = document.currentScript.parentElement;
            if(sessionStorage.getItem('at') === null){
                u.children[0].classList.add('active');
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
     
      
