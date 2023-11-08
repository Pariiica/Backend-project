<?php

$username = $password = "";
$usernameError = $passwordError = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["username"])) {
    $usernameError = "Username is required";
  } else {
    $username = test_input($_POST["username"]);

    if (!preg_match("/^[a-zA-Z-' ]*$/", $username)) {
      $usernameError = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["password"])) {
    $passwordError = "Password is required";
  } else {
    $password = $_POST["password"];
  }
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="style.css" rel="stylesheet">
  <title>Login Page</title>
</head>

<body>
  <div class="container-fluid">
    <form class="mx-auto" method="post">
      <h4 class="text-center">Login</h4>
      <div class="mb-3 mt-5">
        <label for="" class="form-label">Username</label>
        <input type="text" name="username" class="form-control">
        <div class="error"><?= $usernameError ?>
        </div>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Password</label>
        <input type="password" name="password" class="form-control">
        <div class="error"><?= $passwordError ?></div>
      </div>

      <button type="submit" class="btn btn-primary mt-5">Login</button>
      <div class="button-text mt-2 text-center"><a href="signup.php">Creat Account</a></div>
    </form>
  </div>
</body>

</html>