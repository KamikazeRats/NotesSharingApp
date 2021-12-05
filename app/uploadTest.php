<?php
namespace App;

class uploadTest{
   
    public function verifyType($file_name) {
        
        $uploadedFile=$file_name;
        //_DIR_.$file_name;
        
            $ext = pathinfo($uploadedFile, PATHINFO_EXTENSION);
            $validExt = array ( 'pdf', 'txt', 'doc', 'docx', 'ppt' , 'zip');

            if (!in_array($ext, $validExt)){
                return false;
            }
            return true;
        }
}
?>