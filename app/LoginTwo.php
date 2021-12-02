<?php
namespace App;

class LoginTwo{
    
    public function pwd($password, $pass) {
        if (password_verify($password, $pass)) return true;
        return false;
    }
}

?>