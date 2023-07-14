<?php
   session_start();
   include("../admin/conn.php");
   $db = connect();
   $email = $_POST['user_email'];
   $password = $_POST['user_password'];

   if($email == "" and $password == "") {
    header("location: ../index.php?incorrect");
   }  else {
      $result = $db->query("SELECT id, email, password FROM usertb WHERE email = '$email'");
      $final = $result->fetch();
      // print_r($final);

      if($email == $final->email and $password == $final->password) {
         $_SESSION['login-id'] = $final->id;
         $_SESSION['$email'] = $final->email;
         header("location: dashboard.php?email=$final->email");
      } else {
         // header("location: ../index.php?incorrect");
      }
   }
   
?>