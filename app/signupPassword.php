<?php
namespace App;

class signupPassword{
   
    public function verifyPassword($password) {
        
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        
        if(!$uppercase || !$lowercase || !$number || strlen($password) < 6) {
            return false;
        }
        return true;
}
}
?>