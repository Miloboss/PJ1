<?php
session_start();
$iemail = $_GET['email'];
$semail = $_SESSION['$email'];
if ($iemail == $semail) {
  header("location: ../index.php");
}
?>

<?php
include("../admin/conn.php");
$db = connect();
$id = $_SESSION['login-id'];
$data = $db->query("SELECT userprofile.name, userprofile.age, userprofile.phone, userprofile.address FROM usertb RIGHT JOIN userprofile ON usertb.id = userprofile.userid WHERE userprofile.userid = $id");
$result = $data->fetch();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../assets/node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
  <div class="container mt-4">
    <div>
      <h2 class=' text-center'>Welcome <?= $result->name ?></h2>
    </div>

    <div>
      <form action="user-logout.php">
        <div class="input-group mb-3">
          <span class="input-group-text">Name</span>
          <span class="form-control"><?= $result->name ?></span>
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text">Age</span>
          <span class="form-control"><?= $result->age ?></span>
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text">Phone</span>
          <span class="form-control"><?= $result->phone ?></span>
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text">Address</span>
          <span class="form-control"><?= $result->address ?></span>
        </div>

        <div class="input-group mb-3">
          <button class="btn btn-danger">Logout</button>
        </div>
      </form>
    </div>
  </div>
</body>

</html>