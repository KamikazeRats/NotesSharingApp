<?php 

class signupTest extends \PHPUnit\Framework\TestCase {
    
    public function testsignup1() {
        $app = new App\signupPassword;
        $result = $app->verifyPassword("shreyash");
        $this->assertEquals(true,$result);
    }

    public function testsignup2() {
        $app = new App\signupPassword;
        $result = $app->verifyPassword("#1_23+-&");
        $this->assertEquals(true,$result);
    }

    public function testsignup3() {
        $app = new App\signupPassword;
        $result = $app->verifyPassword("Tejas12345");
        $this->assertEquals(true,$result);
    }

    public function testsignup4() {
        $app = new App\signupPassword;
        $result = $app->verifyPassword("HBFSNasd*NJKFSKFSJ326571");
        $this->assertEquals(true,$result);
    }

    public function testsignup5() {
        $app = new App\signupPassword;
        $result = $app->verifyPassword("wtf");
        $this->assertEquals(true,$result);
    }
}
?>