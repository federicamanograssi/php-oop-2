<?php

    class User{
        public $user_id;
        public $user_role;
        public $user_nickname;
        public $user_name;
        public $user_lastname;
        public $user_email;

        public function __construct($_user_nickname,$_user_role)
        {
            $this->user_nickname = $_user_nickname;
            $this->user_role = $_user_role;
        }
    }