<?php
namespace App;

class updatePassword{
    
    public function update_password($username, $password, $npwd, $cnpwd) {
        $conn = mysqli_connect("localhost","root","","notes" ) or die ("error" . mysqli_error($conn));
        mysqli_real_escape_string($conn, $username);
        mysqli_real_escape_string($conn, $password);
        mysqli_real_escape_string($conn, $npwd);
        mysqli_real_escape_string($conn, $cnpwd);
        $query = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($conn , $query) or die (mysqli_error($conn));
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $pass = $row['password'];
                if (password_verify($password, $pass )) {
                    if(!$npwd or !$cnpwd) return false;
                    if($npwd!=$cnpwd) return false;
                    if(strlen($npwd)<6 or strlen($npwd)>50 or strlen($cnpwd)<6 or strlen($cnpwd)>50) return false;

                    // $updatequery = "UPDATE users SET password = '$npwd' WHERE username = '$username'";
                    // $result1 = mysqli_query($conn , $updatequery) or die(mysqli_error($conn));
                    // if (mysqli_affected_rows($conn) > 0) {
                    //     return true;
                    // }
                    // else {
                    //     return false;
                    // }

                    return true;
                }
                else {
                    return false;
                }
              }
        }
        else return false;
    }
}

?>