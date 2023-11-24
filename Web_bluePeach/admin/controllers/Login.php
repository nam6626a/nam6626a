<?php 
    class login extends controller{
        function default() {
         $this->view('loginView');
          $result = $this-> model('user_class');
                if(isset($_POST['Dangnhap'])){
                $email = $_POST['email'];
                $password = $_POST['password'];
                $check = $result->checkUser($email, $password);
                $kq = $check ->fetchAll();
                    if(count($kq)> 0){
                        $_SESSION['user_email']= $email;
                        $_SESSION['password']=$password;
                        header('location: home');
                    }
                }
        }
    }
?>
 
