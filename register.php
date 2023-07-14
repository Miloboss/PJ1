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
        <div class=" brand-name text-center mb-3" style=" font-size: 25px; font-weight: 600;">Register Page</div>
        <?php if (isset($_GET['incorrect'])) : ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Register Failure!</strong> Please check your email or password and try again.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif ?>

        <?php if (isset($_GET['pw-error'])) : ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Register Failure!</strong> Your Password is not same.Please check your password.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif ?>

        <?php if (isset($_GET['same'])) : ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Register Failure!</strong> Your Email is already exists.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif ?>
        <form action="user/register-data.php" method="POST">
            <label for="" class="form-label">Email</label>
            <input type="email" name="email" class=" form-control mb-2" placeholder="Email">

            <label for="" class="form-label">Password</label>
            <input type="password" name="password" class=" form-control mb-3" placeholder="Password">

            <label for="" class="form-label">Confirm Password</label>
            <input type="password" name="con_password" class=" form-control mb-3" placeholder="Confirm Password">

            <button class=" btn btn-success">Register</button>
        </form>
    </div>
</body>
<script src="assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</html>
