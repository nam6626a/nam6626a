<?php 
    class Product_class extends DB {
        public function IMG___UpLoadFile($file_nguon, $thu_muc_dich, $kich_thuoc){
            $thong_bao="ok";
            $file_dich = $thu_muc_dich.basename($file_nguon["name"]);
        
            if(!(isset($file_nguon['tmp_name']) && $file_nguon['tmp_name']!="")){
                return "Chua chon file";
            }
            if(!getimagesize($file_nguon["tmp_name"])){
                $thong_bao="Định dạng không hỗ trợ";
            }
            else if (file_exists($file_dich)) {
                $thong_bao="File đã tồn tại";
                return "ok";
              }else if($file_nguon["size"]>$kich_thuoc*1048576){
                    $thong_bao="File quá giới hạn dung lượng (".$kich_thuoc." MB)";
                    }else if(move_uploaded_file($file_nguon["tmp_name"], $file_dich)){
                        
                    }else{
                        $thong_bao="Lỗi không xác định: không thể tải lên tệp";
                    }
            return $thong_bao;
                }

                function GetSP() {
                    $qr = "SELECT * FROM product ";
                    $result = $this-> conn ->prepare($qr);
                    $result -> execute();
                    return $result;
                }

                function AddSp($product_name, $category_name, $price, $old_price, $description, $product_img ){
                    $qr = "INSERT INTO product(product_name, category_name, price, old_price, description, product_img) VALUES ('$product_name','$category_name','$price','$old_price','$description','".$product_img['name']."')";
                    $result = $this-> conn ->prepare($qr);
                    $result ->execute();
                        $product_img = $_FILES['product_img'];
                        $nhan = $this->IMG___UpLoadFile($product_img, './public/img/', 5);
                        
                    return $result;
                    return $nhan;
                }

                function GetSPbyID($product_id) {
                    $qr = "SELECT * FROM product WHERE product_id = $product_id ";
                    $result = $this-> conn ->prepare($qr);
                    $result -> execute();
                    return $result;
                }

                function updateSP($product_name, $category_name, $price, $old_price, $description, $product_img, $product_id) {
                    $qr = "UPDATE product SET product_name = '$product_name', category_name = '$category_name', price ='$price', old_price='$old_price', description='$description', product_img='".$product_img['name']."' WHERE product_id = $product_id";
                    $result = $this-> conn ->prepare($qr);
                    $result -> execute();
                    $product_img = $_FILES['product_img'];
                    $nhan = $this->IMG___UpLoadFile($product_img, './public/img/', 5);
                    return $result;
                    return $nhan;
                }
                
                function DelProduct($product_id)  {
                    $qr = "DELETE FROM product WHERE product_id = $product_id";
                    $result = $this-> conn ->prepare($qr);
                    $result -> execute();
                    return $result;
                }
                function GetspByDM($category_name) {
                    $qr = "SELECT * FROM product WHERE category_name = '$category_name' ";
                    $result = $this-> conn ->prepare($qr);
                    $result -> execute();
                    return $result;
                }
    }
?>