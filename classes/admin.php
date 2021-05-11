<?php

require_once 'user.php';

class Admin extends User{
    public $management_users = true;

    public function setRole(){
        $this->user_role = "amministratore";
    }
}