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

        }

        public function createCategory($data){

        }

        public function updateCategory($data){

        }

        public function deleteCategory($id){

        }

        public function searchCategory(){
            
        }
    }
?>