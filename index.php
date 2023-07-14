<?php ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="assets/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class=" container mx-auto a p-4 mt-5" style=" max-width: 300px;">
        <div class=" brand-name text-center mb-3" style=" font-size: 25px; font-weight: 600;">Login Page</div>
        <?php if (isset($_GET['incorrect'])) : ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Login Failure!</strong> Please check your email or password and try again.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif ?>

        <form action="user/user-login.php" method="POST">
            <label for="" class="form-label">Email</label>
            <input type="email" name="user_email" class=" form-control mb-2" placeholder="Please fill your email">

            <label for="" class="form-label">Password</label>
            <input type="password" name="user_password" class=" form-control mb-3" placeholder="Please fill your password">

            <div class=' d-flex'>
            <button class=" btn btn-success me-3">Login</button>
            <a class=" btn btn-danger" href='register.php'>Register</a>
            </div> 
        </form>
    </div>
</body>
<script src="assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</html>
