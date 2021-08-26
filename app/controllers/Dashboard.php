<?php
    class Dashboard extends Controller {
        public function __construct()
        {
            if($_SESSION['session_login'] != 'active'){
                Flasher::setMessage('Anda belum Login !', 'danger');
                header('location: '.base_url.'/login');
                exit;
            }
        }

        public function index(){
            $data['title'] = 'Dashboard';

            $this->view('templates/header', $data);
            $this->view('templates/sidebar', $data);
            $this->view('dashboard/index', $data);
            $this->view('templates/footer');
        }
    }
?>