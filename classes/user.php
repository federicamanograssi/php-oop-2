<?php
    // require_once '../traits/users_main.php';


    class User{
        // public $user_id;
        // public $user_email;

        // provo a sostituirlo col trait
        use UserMain;
        
        public $user_role;
        public $user_nickname;
        public $user_name;
        public $user_lastname;

        public function __construct($_user_nickname)
        {
            $this->user_nickname = $_user_nickname;
        }
        public function setRole(){
            $this->user_role = "utente";
        }
    }