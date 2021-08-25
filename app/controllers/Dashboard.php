<?php
    class Dashboard extends Controller {
        public function index(){
            $data['title'] = 'Dashboard';

            $this->view('templates/header', $data);
            $this->view('templates/sidebar', $data);
            $this->view('dashboard/index', $data);
            $this->view('templates/footer');
        }
    }
?>