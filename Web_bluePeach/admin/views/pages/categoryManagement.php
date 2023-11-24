<?php 
    // if(!defined("namapp")){
    //     header("location: /");
    // }
?>

 
           
<div class="handel-form">
<h1>Danh Sách Danh Mục</h1>
    <?php  ?>
    <button class="btn-class"><a href="AddCategory">Thêm Danh mục</a></button>
    <form action="" method="get">
        <table class="TB_DM">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên danh mục</th>
                    <th>Danh mục cha</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data["dl"] as $row){ ?>
                <tr>
                    <td> 
                        <?php echo $row['category_id']; ?>
                    </td>
                    <td><?php echo $row['category_name']; ?></td>
                    <td><?php echo $row['parent_id'] ?></td>
                    <td><a href="UpdateCategory?category_id=<?php echo $row['category_id']; ?>">Sửa</a>, <a href="DelCategory?category_id=<?php echo$row['category_id']; ?>">Xóa</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </form>
</div>