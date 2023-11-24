<?php
session_start();
ob_start();
    require_once('../admin/models/User.php');
    if(isset($_POST['Dangnhap'])){
        $result = new User_class;
        $email = $_POST['email'];
        $password = $_POST['password'];
        $check = $result ->checkUser($email, $password);
        $kq = $check ->fetchAll();
            if(count($kq)> 0){
                $_SESSION['user_email']= $email;
                $_SESSION['password']=$password;
                header('location: home');
            }
        }
 ?>
 <div>
    <form action="" method="post">
        <input type="text" name="email" placeholder="email">
        <input type="text" name="password" placeholder="Password">
        <input type="submit" value="Đăng Nhập" name="Dangnhap">
    </form>
 </div>