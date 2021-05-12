<?php
require_once 'user.php';
// require_once '../traits/users_main.php';

class Admin extends User{
    public $management_users = true;

    public function setRole(){
        $this->user_role = "amministratore";
    }
}