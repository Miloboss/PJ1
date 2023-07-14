<?php
session_start();
$email = $_SESSION['$email'];
$id = $_SESSION['id'];
 include("../admin/conn.php");
 $db = connect();
 $name = $_POST['name'];
 $age = $_POST['age'];
 $phone = $_POST['phone'];
 $address = $_POST['address'];

 if(!empty($name & $age & $phone & $address)) {
    $db->query("INSERT INTO userprofile ( userid ,name, age, phone, address) VALUES ('$id', '$name', '$age', '$phone', '$address')");
    header("location: dashboard.php?email=$email");
    $_SESSION['login-id'] = $id;
 } else {
    header("location: profile.php?email=$email");
 }
?>