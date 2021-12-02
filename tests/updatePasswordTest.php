<?php 

class updatePasswordTest extends \PHPUnit\Framework\TestCase {
    
    //correct credentials
    public function testUpdatePassword1() {
        $app = new App\updatePassword;
        $result = $app->update_password("user","userpass","userpwd","userpwd");
        $this->assertEquals(true, $result);
    }

    //wrong username
    public function testUpdatePassword2() {
        $app = new App\updatePassword;
        $result = $app->update_password("teer","testpwd","userpwd","userpwd");
        $this->assertEquals(true, $result);
    }

    //wrong password
    public function testUpdatePassword3() {
        $app = new App\updatePassword;
        $result = $app->update_password("testuser","tessswd","userpwd","userpwd");
        $this->assertEquals(true, $result);
    }

    //different new pswd and confirm new pswd
    public function testUpdatePassword4() {
        $app = new App\updatePassword;
        $result = $app->update_password("testuser","testpwd","userpwd1","userpwd");
        $this->assertEquals(true, $result);
    }

    //blank new password
    public function testUpdatePassword5() {
        $app = new App\updatePassword;
        $result = $app->update_password("testuser","testpwd","","");
        $this->assertEquals(true, $result);
    }

    //blank username
    public function testUpdatePassword6() {
        $app = new App\updatePassword;
        $result = $app->update_password("","testpwd","userpwd","userpwd");
        $this->assertEquals(true, $result);
    }

     //correct credentials
     public function testUpdatePassword7() {
        $app = new App\updatePassword;
        $result = $app->update_password("user","userpass","userpwd","userpwd");
        $this->assertEquals(true, $result);
    }
}

?>