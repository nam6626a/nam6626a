
<div>
    <?php foreach($data['dl'] as $row ){ ?>
    <form action="" method="POST">
        <label for="">Tên Danh Mục</label>
        <input type="text" name="category_name" value="<?php echo $row['category_name']; ?>" >
        <label for="">Danh Mục Cha</label>
        <input type="text" name="parent_id" value="<?php echo $row['parent_id']; ?>">
        <input type="submit" value="sửa" name="sua">
    </form>
    <?php }?>
    <a href="category">Quay lại trang QLDM</a>
</div>