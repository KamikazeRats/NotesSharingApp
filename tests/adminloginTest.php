<?php 

class adminloginTest extends \PHPUnit\Framework\TestCase {
    //correct credentials
    public function testAdminLogin1() {
        $app = new App\AdminLoginTest;
        $result = $app->verify("admin","admin");
        $this->assertEquals(true, $result);
    }
    //admin does not exist
    public function testAdminLogin2() {
        $app = new App\AdminLoginTest;
        $result = $app->verify("doesnotexist","userpass");
        $this->assertEquals(true, $result);
    }
    //password is wrong
    public function testAdminLogin3() {
        $app = new App\AdminLoginTest;
        $result = $app->verify("admin","wrong");
        $this->assertEquals(true, $result);
    }
    //correct credentials
    public function testAdminLogin4() {
        $app = new App\AdminLoginTest;
        $result = $app->verify("admin1","admin1");
        $this->assertEquals(true, $result);
    }
    //correct credentials
    public function testAdminLogin5() {
        $app = new App\AdminLoginTest;
        $result = $app->verify("admin1","admin1");
        $this->assertEquals(true, $result);
    }
    //correct credentials
    public function testAdminLogin6() {
        $app = new App\AdminLoginTest;
        $result = $app->verify("admin1","admin1");
        $this->assertEquals(true, $result);
    }
    //correct credentials
    public function testAdminLogin7() {
        $app = new App\AdminLoginTest;
        $result = $app->verify("admin2","admin2");
        $this->assertEquals(true, $result);
    }
}

?>