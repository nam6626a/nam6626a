<?php 
?>
<div>
    <?php foreach($data['dl'] as $row ){ 
        // if($row['product_img']){
        //     $_FILES['product_img'] =   $row['product_img'] ;
        // }
        ?>
        <form class="FormUDSP" action="" method="POST" enctype="multipart/form-data">
    <label for="">Thêm Sản Phẩm</label>
    <input type="text" value="<?php echo $row['product_name'] ?>" name="product_name">
    <select required name="category_name" id="">
    <option value="<?php echo $row['category_name']?>">-- <?php echo $row['category_name']?> --</option>
    <?php foreach($data["dt"] as $dl){ ?>
            <option  value="<?php echo $dl['category_name']?>"><?php echo $dl['category_name']?></option>
    <?php } ?>
    </select>
    <input type="text" value="<?php echo $row['price'] ?>" name="price">
    <input type="text" value="<?php echo $row['old_price'] ?>" name="old_price">
    <input type="text" value="<?php echo $row['description'] ?>" name="description">
    <input id="doiImg"  type="file" placeholder="Ảnh" name="product_img">
    <input type="hidden" name="" value="<?php echo $row['product_img'] ?>">
    <img id="Imgdoi" class="img-product" src="<?=dn?>/public/img/<?php echo $row['product_img'] ?>" alt="">
    <input type="submit" name="sua" value="Sửa">
</form>
    <?php }?>
    <a href="product">Quay lại trang QLSP</a>
</div>
