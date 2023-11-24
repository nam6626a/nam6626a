<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="<?=dmn?>/public/css/style.css">
   <link rel="stylesheet" href="<?=dmn?>/public/css/grid.css">
   <link rel="stylesheet" href="<?=dmn?>/public/fontawesome-free-6.4.0-web/css/all.css">
    <title>Document</title>
</head>
<body>
    <div class="main">
        <div class="grid" >
            <div class="row">
                <div class="l-12">
        <?php 
    require_once("./views/blocks/header.php"); 
    ?>
    </div>
    </div>
            <div class="row">
    
        <div style=" border-right: 1px solid #d6d5d5;" class="col l-2 c-3"  >
            <div  class="menu-admin" >
    <?php  require_once("./views/blocks/navbar.php");  ?>
            </div>
        </div>
    
    <div style="background-color: #f8f8f8;" class="col l-10 c-9" >
        <div class="slider">
            <?php require_once("./views/pages/".$data['page'].".php") ?>
        </div>
    </div>
   
            </div>
        </div>
    </div>
    <script src="<?=dmn?>/js/main.js">
      
</script>
</body>
</html>
