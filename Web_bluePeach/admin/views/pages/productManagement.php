<?php 
   
?>
<div class="handel-form">
    <?php  ?>
    <h1>Danh Sách Sản Phẩm</h1>
    <button class="btn-class"><a href="AddProduct">Thêm Sản Phẩm</a></button>
    <form action="" method="get">
        <table class="TB_DM">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Tên Danh Mục</th>
                    <th>Giá khuyến mại</th>
                    <th>Giá Cũ</th>
                    <th>Mô Tả</th>
                    <th>Ảnh sp</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data["dl"] as $row){ ?>
                <tr>
                    <td><?php echo $row['product_id']; ?></td>
                    <td><?php echo $row['product_name'] ?></td>
                    <td><?php echo $row['category_name']; ?></td>
                    <td><?php echo $row['price'] ?></td>
                    <td><?php echo $row['old_price'] ?></td>
                    <td><?php echo $row['description'] ?></td>
                    <td><img class="img-product" src="<?=dn?>/public/img/<?php echo $row['product_img'] ?>" alt=""></td>
                    <td><a href="UpdateProduct?product_id=<?php echo $row['product_id']; ?>">Sửa</a>, <a href="DelProduct?product_id=<?php echo $row['product_id']; ?>">Xóa</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </form>
</div>