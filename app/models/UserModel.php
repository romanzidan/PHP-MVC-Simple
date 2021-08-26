<?php
    class UserModel{
        private $table = 'users';
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function checkLogin($data){
            $query = "SELECT * FROM ".$this->table." WHERE username = :username";
            $this->db->query($query);
            $this->db->bind('username', $data['username']);
            $user = $this->db->single();
            if($user){
                if (password_verify($data['password'], $user['password'])) {
                    return 1;
                }else{
                    return 0;
                }
            }else{
                return 0;
            }
        }
    }
?>