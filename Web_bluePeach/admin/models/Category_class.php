<?php
    class Category_class extends DB{
        
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