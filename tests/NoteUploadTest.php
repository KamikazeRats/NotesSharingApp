<?php 

    class noteUploadTest extends \PHPUnit\Framework\TestCase {
        
        public function testUpload1() {
            $app = new App\uploadTest;
            $result = $app->verifyType('\311560.pdf');
            $this->assertEquals( true,$result);
        }
        public function testUpload2() {
            $app = new App\uploadTest;
            $result = $app->verifyType('\117414.txt');
            
            $this->assertEquals( true,$result);
        }
        public function testUpload3() {
            $app = new App\uploadTest;
            $result = $app->verifyType("");
            $this->assertEquals( true,$result);
        }
        public function testUpload4() {
            $app = new App\uploadTest;
            $result = $app->verifyType('\69321.pdf');
            $this->assertEquals( true,$result);
        }
        // public function testUpload5() {
        //     $app = new App\uploadTest;
        //     $result = $app->verifyType("\19BIT0001_VL2020210500812_DA02.pdf");
        //     $this->assertEquals( true,$result);
        // }
    }

    ?>