<?php
    class Category extends Controller {
        public function __construct()
        {
            if($_SESSION['session_login'] != 'active'){
                Flasher::setMessage('Anda belum Login !', 'danger');
                header('location: '.base_url.'/login');
                exit;
            }
        }

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
            $data['title'] = 'Detail Category';
                $data['category'] = $this->model('CategoryModel')->getCategoryById($id);

            $this->view('templates/header', $data);
            $this->view('templates/sidebar', $data);
            $this->view('category/edit', $data);
            $this->view('templates/footer');
        }

        public function create(){
            $data['title'] = 'Create Category';

            $this->view('templates/header', $data);
            $this->view('templates/sidebar', $data);
            $this->view('category/create', $data);
            $this->view('templates/footer');
        }

        public function saveCategory(){
            if (empty($_POST['name'])) {
                Flasher::setMessage('Input field is required', 'danger');
                header('location: '. base_url. '/category/create');
                exit;
            }
            if ($this->model('CategoryModel')->createCategory($_POST) > 0) {
                Flasher::setMessage('Success created Category.', 'success');
                header('location: '. base_url. '/category');
                exit;
            }else{
                Flasher::setMessage('Failed to create Category', 'danger');
                header('location: '.base_url.'/category');
                exit;
            }
        }

        public function updateCategory(){
            if (empty($_POST['name'])) {
                Flasher::setMessage('Input field is required', 'danger');
                header('location: '. base_url. '/category/edit/'.$_POST['id']);
                exit;
            }
            if ($this->model('CategoryModel')->updateCategory($_POST) > 0) {
                Flasher::setMessage('Success updated Category.', 'success');
                header('location: '. base_url. '/category');
                exit;
            }else{
                Flasher::setMessage('Failed to update Category', 'danger');
                header('location: '.base_url.'/category');
                exit;
            }
        }

        public function delete($id){
            if ($this->model('CategoryModel')->deleteCategory($id) > 0) {
                Flasher::setMessage('Category deleted successfully', 'success');
                header('location: '.base_url.'/category');
                exit;
            }else{
                Flasher::setMessage('Failed to delete Category', 'danger');
                header('location: '.base_url.'/category');
                exit;
            }
        }
    }
?>