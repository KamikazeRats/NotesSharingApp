<?php
namespace App;

class AdminLoginTest{
    
    public function verify($username, $password) {
        $conn = mysqli_connect("localhost","root","","notes" ) or die ("error" . mysqli_error($conn));
        mysqli_real_escape_string($conn, $username);
        mysqli_real_escape_string($conn, $password);
        $query = "SELECT * FROM admin WHERE admin = '$username'";
        $result = mysqli_query($conn , $query) or die (mysqli_error($conn));
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $pass = $row['password'];
                if ($password == $pass ) {
                  return true;
                }
                else {
                    return "wrong password";
                }
              }
        }
        else return "admin doesn't exist";
    }
}

?>