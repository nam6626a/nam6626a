<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?=dn?>/access/img/sp1.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/modern-normalize/2.0.0/modern-normalize.min.css">
    <link rel="stylesheet" href="<?=dn?>/access/main.css">
    <link rel="stylesheet" href="<?=dn?>/access/base.css">
    <link rel="stylesheet" href="<?=dn?>/access/grid.css">
    <link rel="stylesheet" href="<?=dn?>/access/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="<?=dn?>/access/fontawesome-free-6.4.0-web/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap&subset=vietnamese" rel="stylesheet">
    <title>web_bluePeach</title>
</head>
<body>
<div class="app ">
    <?php
        function Vinfo($v,$rd=false){
            $_ret = "<div style=' max-width: 100vw;overflow-x: scroll; font-family: monospace; background: #353d41; color:#94ff82; padding:8px;'>";
            $bt = debug_backtrace();
            $caller = array_shift($bt);
            $_ret.= "<span style='display:block;font-family: inherit; color:#a5ab53;padding:3px 0;'>Dòng <b style='font-family: inherit;color:#d2d96f'>".$caller['line']."</b> file <b style='font-family: inherit;color:#d2d96f'>".$caller['file']."</b></span>";
            $_ret.= "<b style='font-family: inherit;color: #64daff;'>Kiểu dữ liệu:</b> ".gettype($v)."</br>";
            $r = print_r($v,true);
            $r = str_replace(["&gt;"],[">"],$r);
            $_ret.= "<b style='font-family: inherit;color:#ffaa3d; display:block;'>Giá trị:</b><xmp style='font-family: inherit;margin-left:2.5rem;'>".$r."</xmp></div>";
        
            if($rd==false){
                echo $_ret;
            }else return $_ret;
        }
     require_once('./views/blocks/header.php') 
     ?>

  
  <?php require_once('./views/pages/'.$data['page'].'.php') ?>
  <?php require_once('./views/blocks/footer.php');
        
   ?>
   </div>
<?php require('./views/blocks/modal.php');
  
?>

<script src="<?=dn?>/index.js"></script>
<script>
    function addToCart(u) {
        let Rq= new XMLHttpRequest();
        Rq.addEventListener('readystatechange', function(){
          if(Rq.readyState == 4){
            let rs =Rq.response;
            console.log(rs);
            let show = document.createElement('div');
            show.setAttribute('class', 'modalCart');
            let x = document.body.querySelector('.modalCart')
            if(x != null){
                x.remove();
            }
            show.innerHTML= rs
            document.body.append(show);

          }
        });
        Rq.open('GET', "<?=dn?>/home/?addCart=" + u, true);
        Rq.send(null);

        // 
        //     // Sử dụng Ajax để gửi yêu cầu đến server
        //     $.ajax({
        //         url: '<?=dn?>/views/blocks/modal.php', // Đường dẫn đến file xử lý ở phía máy chủ
        //         type: 'POST',
        //      , // Dữ liệu gửi đi
        //         success: function(response) {
        //             console.log(response)
        //             // Hiển thị thông báo trả về từ máy chủ
        //             $('.Cart-add').html(response);
        //         }
        //     });
        }
</script>
</body>
</html>