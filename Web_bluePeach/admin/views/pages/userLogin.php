<div class="handel-form">
<h1>Danh Sách Sản Phẩm</h1>
    <?php  ?>
    <button class="btn-class"><a href="AddCategory">Thêm Thành Viên</a></button>
    <form action="" method="get">
        <table class="TB_DM">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Họ Tên</th>
                    <th>Email</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data["dl"] as $row){ ?>
                <tr>
                    <td> 
                        <?php echo $row['user_id']; ?>
                    </td>
                    <td><?php echo $row['user_name']; ?></td>
                    <td><?php echo $row['user_email'] ?></td>
                    <td><a href="UpdateCategory?category_id=">Sửa</a>, <a href="DelCategory?category_id=">Xóa</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </form>
</div>