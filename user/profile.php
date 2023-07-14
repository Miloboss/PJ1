<?php
     session_start();
     $iemail = $_GET['email'];
     $semail = $_SESSION['$email'];
     if(!($iemail == $semail)) {
        header("location: ../index.php");
     } 
?>

<?php ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../assets/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <div class=" container mx-auto a p-4 mt-5" style=" max-width: 300px;">
        <div class=" brand-name text-center mb-3" style=" font-size: 25px; font-weight: 600;">Profile Page</div>

        <form action="profile-up.php" method="POST">
            <label for="" class="form-label">Name</label>
            <input type="text" name="name" class=" form-control mb-2" placeholder="Please fill your Name">

            <label for="" class="form-label">Age</label>
            <input type="number" name="age" class=" form-control mb-3" placeholder="Please fill your Age">

            <label for="" class="form-label">Phone</label>
            <input type="number" name="phone" class=" form-control mb-2" placeholder="Please fill your Phone Number">

            <label for="" class="form-label">Address</label>
            <input type="text" name="address" class=" form-control mb-2" placeholder="Please fill your Address">

            <button class=" btn btn-success me-3">Confrm</button>
            <!-- <div class=' d-flex'>
            
            <a class=" btn btn-danger" href='register.php'>Register</a>
            </div>  -->
        </form>
    </div>
</body>
<script src="../assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</html>
