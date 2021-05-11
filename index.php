<?php

    class User{
        public $user_id;
        public $user_role;
        public $user_nickname;
        public $user_name;
        public $user_lastname;
        public $user_email;
    }

    $ppl01 = new User();
    var_dump($ppl01);