<?php 
    class phantrang extends DB{
        public function tim_bai_viet($curr = 1, $limit=10){
            $offset=($curr-1)*$limit;
            
            //Lấy số bạn ghi cho trang hiện tại
            $sql="SELECT * FROM product LIMIT ".$limit." OffSET ".$offset;
            $_pt=[];
            $result = $this->conn -> prepare($sql);
            $result -> execute();
            $_bv = $result ->fetchAll(PDO::FETCH_ASSOC);
            
          
            if(isset($_GET['product_id'])){
                $product_id = $_GET['product_id'];
            }else{
                $product_id = 22;
            }
            $qr="SELECT * FROM product WHERE product_id = $product_id";
            $cartAdd = $this->conn->prepare($qr);
            $cartAdd -> execute();
            $_CA = $cartAdd ->fetchAll(PDO::FETCH_ASSOC);
            // Lấy số bản ghi tối đa 
            $sql="SELECT * FROM product";
            $query = $this->conn->prepare($sql);
            $query -> execute();
                // Phân trang
            $cur = (int)$curr;
            $start=1;
            $prev=$cur-1;
            $next=$cur+1;
            $to_tal= ceil($query->rowCount()/$limit);
            
            $starthtml="";
            $prevhtml="";
            $currtml="<a  class='pagination-item__link'>".$curr." </a>";

            $nexthtml="";
            $endhtml="";
    
            if($start < $cur){ // nếu satrt nhỏ hơn current thì start mới tồn tại
                $starthtml = "<a  class='pagination-item__link ' href='/".$start."' >".$start."</a>";
            }
            if($prev > $start){ // nếu pref lớn hơn start thì pref mới tồn tại ( pref = current - 1 nên luôn nhỏ hơn current)
                $prevhtml = "<a  class='pagination-item__link' href='/".$prev."' >".$prev." </a>";
    
    
            }
            if($next < $to_tal){
                $nexthtml = "<a  class='pagination-item__link' href='/".$next."' >".$next." </a>";
    
                
            }
            if($to_tal > $cur){
                $endhtml = "<a  class='pagination-item__link' href='/".$to_tal."' > ".$to_tal."</a>";
            }
    
    
            array_push($_pt,$starthtml,$prevhtml,$currtml,$nexthtml,$endhtml);
    
            return [$_bv,$_pt,$_CA];
        }
    }