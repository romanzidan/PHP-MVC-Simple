<?php
    class Category extends Controller {
        public function index(){
            $data['title'] = 'Category';
            $data['categories'] = $this->model('CategoryModel')->getAllCategory();

            $this->view('templates/header', $data);
            $this->view('templates/sidebar', $data);
            $this->view('category/index', $data);
            $this->view('templates/footer');
        }

        public function search(){

        }

        public function edit($id){

        }

        public function create(){

        }

        public function saveCategory(){

        }

        public function updateCategory(){

        }

        public function delete($id){

        }
    }
?>