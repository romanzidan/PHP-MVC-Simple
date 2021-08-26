<?php
    class Flasher{
        public static function setMessage($message, $type){
            $_SESSION['msg'] = [
                'message' => $message,
                'type' => $type
            ];
        }

        public static function Message(){
            if (isset($_SESSION['msg'])) {
                echo '<div class="alert alert-'.$_SESSION['msg']['type'].' alert-dismissible fade show" role="alert">
                '.$_SESSION['msg']['message'].'
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            }

            unset($_SESSION['msg']);
        }
    }
?>