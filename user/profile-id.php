<?php
   session_start();
   include("../admin/conn.php");
   $db = connect();
   $email = $_SESSION['$email'];
   $data = $db->query("SELECT * FROM usertb WHERE email = '$email'");
   $result = $data->fetch();
   $_SESSION['id'] = $result->id;
   header("location: profile.php?email=$email"); 
?>   