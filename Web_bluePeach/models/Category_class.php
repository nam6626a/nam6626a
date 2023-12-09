<?php
    class Category_class extends DB{
        public $mn = null;
        protected $m = null;
        function menu_g($m) {
            $this->m = $m;
            $this->mn = function(){       
            $x= $this-> GetDMbyParent_id(0);
            $c=0;
                while($m1 = $x->fetch(PDO::FETCH_ASSOC)){
                    if($c == $this->m){
                        $class = 'active';
                    }

                    else{

                        $class ='';
                    }
                    $c++;
                ?>
              
               <li class="<?=$class?> foodter-list-item"><a href="<?= $m1['route']?>"><?= $m1['category_name']?></a>
               
                    <?php 
                        $x2 = $this->GetDMbyParent_id($m1['category_id']);
                        if($x2->rowCount() >0 ){
                            echo '<ul class="sub-list-item">';
                            while($m2 = $x2->fetch(PDO::FETCH_ASSOC)){
                                ?>
               <li><a href="<?= $m2['route']?>"><?= $m2['category_name']?></a>  </li>
                                <?php 
                            }
                            echo '</ul>';
                        }
                    ?>
              
                <?php
                    }
            };
            return $this->mn;
        }
        
        function AddDm($category_name, $parent_id){
            $qr = "INSERT INTO category(category_name, parent_id) VALUES ('$category_name','$parent_id')";
            $result = $this-> conn ->prepare($qr);
            $result ->execute();
            return $result;
        }
      
        function GetDM() {
            $qr = "SELECT * FROM category ";
            $result = $this-> conn ->prepare($qr);
            $result -> execute();
            return $result;
        }
      
        function GetDMbyID($category_id) {
            $qr = "SELECT * FROM category WHERE category_id = $category_id ";
            $result = $this-> conn ->prepare($qr);
            $result -> execute();
            return $result;
        }
        function GetDMbyParent_id($parent_id) {
            $qr = "SELECT * FROM category WHERE parent_id = $parent_id ";
            $result = $this-> conn ->prepare($qr);
            $result -> execute();
            return $result;
        }
       
        function updateDM($category_name, $parent_id, $category_id) {
            $qr = "UPDATE category SET category_name = '$category_name', parent_id = '$parent_id' WHERE category_id = $category_id";
            $result = $this-> conn ->prepare($qr);
            $result -> execute();
            return $result;
        }
      
        function DelCategory($category_id)  {
            $qr = "DELETE FROM category WHERE category_id = $category_id";
            $result = $this-> conn ->prepare($qr);
            $result -> execute();
            return $result;
        }
      
    }