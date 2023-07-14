<?php
session_start();
include("../admin/conn.php");
$db = connect();

$email = $_POST['email'];
$password = $_POST['password'];
$con_password = $_POST['con_password'];

if(!empty($email) and !empty($password) and !empty($con_password)) {
      if($password == $con_password) {
        $result = $db->query("SELECT * FROM usertb WHERE email='$email'");
        $final = $result->fetch();
        if(!$final->email == $email) {
          $db->query("INSERT INTO usertb (email, password) VALUES ('$email', '$password')");
          header("location: profile-id.php");
          $_SESSION['$email'] = $email;
        } else {
          header("location: ../register.php?same");
        }
        
      } else {
        header("location: ../register.php?pw-error");
      }
} else {
    header("location: ../register.php?incorrect");
}
?>