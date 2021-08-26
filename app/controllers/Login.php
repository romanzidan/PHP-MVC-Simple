<?php
    class Login extends Controller{
        public function __construct()
        {
            if(isset($_SESSION['session_login'])){
                if($_SESSION['session_login'] == 'active'){
                    header('location: '.base_url.'/');
                    exit;
                }
            }
        }

        public function index(){
            $data['title'] = 'Login Page';

            $this->view('auth/login', $data);
        }

        public function authLogin(){
            if($row = $this->model('UserModel')->checkLogin($_POST) > 0){
                $_SESSION['username'] = $row['username'];
                $_SESSION['nama'] = $row['nama'];
                $_SESSION['session_login'] = 'active';

                header('location: '.base_url.'/dashboard');
            }else{
                Flasher::setMessage('Username atau Password Salah', 'danger');
                header('location: '.base_url.'/login');
                exit;
            }
        }
    }
?>