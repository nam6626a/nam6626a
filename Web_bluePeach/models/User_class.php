<?php
    class User_class extends DB {
        function renderUser() {
            $qr = "SELECT * FROM user ";
            $result = $this-> conn -> prepare($qr);
            $result ->execute();
            return $result;
        }
        function checkUser($email, $password) {
            $qr = "SELECT * FROM user WHERE user_email = '$email' AND password = '$password' ";
            $result = $this-> conn ->prepare($qr);
            $result -> execute();
            return $result;
        }
    }
 ?>