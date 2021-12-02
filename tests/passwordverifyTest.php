<?php 
class passwordverifyTest extends \PHPUnit\Framework\TestCase {
    public function testVerify1() {
        $app = new App\LoginTwo;
        $result = $app->pwd("userpass",'$2y$10$Z1H.ruYjbMSp07EhejzS0O1Fr7PgFdjqbWmtu7/j68TXr55gZ2Msu');
        $this->assertEquals(true, $result);
    }
    public function testVerify2() {
        $app = new App\LoginTwo;
        $result = $app->pwd("19BIT0001",'$2y$10$LwvR4bhRXUoo8wIo3jWAeONezOGbHHgW8oieWywtbJKZ7ui/2hOY6');
        $this->assertEquals(true, $result);
    }
    public function testVerify3() {
        $app = new App\LoginTwo;
        $result = $app->pwd("19BIT0007",'$2y$10$e7AXGT7G0xZ7v1VOrRLlee7V.jd8UmHzoTHonqh1.ABSKhA2YduEm');
        $this->assertEquals(true, $result);
    }
    public function testVerify4() {
        $app = new App\LoginTwo;
        $result = $app->pwd("19BIT0019",'$2y$10$kTlwDnNMhQbWNIYgE3LzmeD3QKNEApkSAvl9s9nYswjHBCo71Hsdu');
        $this->assertEquals(true, $result);
    }
    public function testVerify5() {
        $app = new App\LoginTwo;
        $result = $app->pwd("19BIT0051",'$2y$10$j6VPHwRxhCv1m.40ILcxnufSluC0LZP2ZD4m1./rmemoUf9CEjrmy');
        $this->assertEquals(true, $result);
    }
    public function testVerify6() {
        $app = new App\LoginTwo;
        $result = $app->pwd("TejasMukherjee",'$2y$10$xjd4VX.uxttksNe4VPsjaumgznA.H1mU.bGpRtj1j/Y4tnObY3fvS');
        $this->assertEquals(true, $result);
    }
    public function testVerify7() {
        $app = new App\LoginTwo;
        $result = $app->pwd("ShreyashVardhan",'$2y$10$YaXvmzEP.MoL1EovktVwPu5m05gHizyLrw.gaw43gGhZCFiY0loh2');
        $this->assertEquals(true, $result);
    }
}
?>