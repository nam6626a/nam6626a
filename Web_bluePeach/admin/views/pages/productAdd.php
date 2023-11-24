
<label for="">Thêm Sản Phẩm</label>
<form action="" method="POST" enctype="multipart/form-data">
<div class="form_productAdd">
    <div class="productAdd_info">
    <input required type="text" placeholder="Tên sản phẩm" name="product_name">
    <select required name="category_name" id="">
    <option value="">--Chọn Danh Mục--</option>
    <?php foreach($data["dl"] as $dl){ ?>
        
            <option  value="<?php echo $dl['category_name']?>"><?php echo $dl['category_name']?></option>
    <?php } ?>
    </select>
    <input required type="text" placeholder="Giá Khuyến Mãi" name="price">
    <input type="text" placeholder="Giá cũ" name="old_price">
    </div>
    <div class="productAdd_descript">
    <input  type="file" placeholder="Ảnh" name="product_img">
    <textarea required id="descript" name="description" cols="30" rows="10" placeholder="Mô Tả"></textarea>
        </div>
    </div>
    <input type="submit" name="them" value="thêm">
</form>

<script src="<?=dmn?>/ckeditor1/ckeditor.js"></script>
<script>
   var exp = CKEDITOR.replace('descript',{filebrowserBrowseUrl: '<?=dmn?>/ckfinder/ckfinder.html',
    filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserWindowWidth: '1000',
    filebrowserWindowHeight: '700'
})
CKFINDER.replace(exp);
</script>
<a class="prev" href="product">Quay lại trang QLSP</a>
