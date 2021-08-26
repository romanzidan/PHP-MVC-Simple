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
            $data['title'] = 'Create Category';

            $this->view('templates/header', $data);
            $this->view('templates/sidebar', $data);
            $this->view('category/create', $data);
            $this->view('templates/footer');
        }

        public function saveCategory(){
            if ($this->model('CategoryModel')->createCategory($_POST) > 0) {
                Flasher::setMessage('Berhasil', 'Ditambahkan', 'success');
                header('location: '. base_url. '/category');
                exit;
            }else{
                
            }
        }

        public function updateCategory(){

        }

        public function delete($id){

        }
    }
?>