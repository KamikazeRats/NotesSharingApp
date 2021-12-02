<?php 

class loginTest extends \PHPUnit\Framework\TestCase {
    //correct credentials
    public function testLogin1() {
        $app = new App\LoginThree;
        $result = $app->verify("user","userpass");
        $this->assertEquals(true, $result);
    }
    //username does not exist
    public function testLogin2() {
        $app = new App\LoginThree;
        $result = $app->verify("doesnotexist","userpass");
        $this->assertEquals(true, $result);
    }
    //password is wrong
    public function testLogin3() {
        $app = new App\LoginThree;
        $result = $app->verify("user","wrong");
        $this->assertEquals(true, $result);
    }
    //correct credentials
    public function testLogin4() {
        $app = new App\LoginThree;
        $result = $app->verify("user","userpass");
        $this->assertEquals(true, $result);
    }
    //correct credentials
    public function testLogin5() {
        $app = new App\LoginThree;
        $result = $app->verify("user","userpass");
        $this->assertEquals(true, $result);
    }
    //correct credentials
    public function testLogin6() {
        $app = new App\LoginThree;
        $result = $app->verify("user","userpass");
        $this->assertEquals(true, $result);
    }
    //correct credentials
    public function testLogin7() {
        $app = new App\LoginThree;
        $result = $app->verify("user","userpass");
        $this->assertEquals(true, $result);
    }
}

?>