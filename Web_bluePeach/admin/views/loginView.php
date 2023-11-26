<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="<?=dn?>/public/css/style.css">
   <link rel="stylesheet" href="<?=dn?>/public/css/login.css">
   <link rel="stylesheet" href="<?=dn?>/public/css/grid.css">
   <link rel="stylesheet" href="<?=dn?>/public/fontawesome-free-6.4.0-web/css/all.css">
    <title>Document</title>
</head>
<body>
    

<div class="login-admin">
    <div class="login-control">
        <h2>Login - <span>admin</span></h2>
         <form action="" method="post" id="form-1">
            <div class="log1 form-group">
                    <input required id="email" class="form-control" type="email" name="email" placeholder="email">
                    <span class="form-message"></span>
                </div>
                <div class="log2 form-group">
                    <input required id="password" class="form-control" type="password" name="password" placeholder="Password">
                    <span class="form-message"></span>
                    </div>
                <input class="form-submit" type="submit" value="Đăng Nhập" name="Dangnhap">
                </form>
             </div>
             </div>
             <script src="<?=dn?>/js/main.js"></script>
             </body>
           
</html>