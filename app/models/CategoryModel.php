<?php
    class CategoryModel {
        private $table = 'categories';
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function  getAllCategory(){
            $this->db->query('SELECT * FROM ' . $this->table);
            return $this->db->resultSet();
        }

        public function getCategoryById($id){
            $query = "SELECT * FROM ".$this->table." WHERE id=:id";
            $this->db->query($query);
            $this->db->bind('id', $id);

            return $this->db->single();
        }

        public function createCategory($data){
            $query = "INSERT INTO ".$this->table." (name) VALUES (:category_name)";
            $this->db->query($query);
            $this->db->bind('category_name', $data['name']);
            $this->db->execute();

            return $this->db->rowCount();
        }

        public function updateCategory($data){
            $query = "UPDATE ".$this->table." SET name=:category_name WHERE id=:id";
            $this->db->query($query);
            $this->db->bind('id', $data['id']);
            $this->db->bind('category_name', $data['name']);
            $this->db->execute();

            return $this->db->rowCount();
        }

        public function deleteCategory($id){

        }

        public function searchCategory(){
            
        }
    }
?>