<?php
$username = $email = $password = $confirmPassword = "";
$usernameError = $emailError = $passwordError = $confirmPasswordError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["username"])) {
    $usernameError = "Username is required";
  } else {
    $username = $_POST["username"];

    if (!preg_match("/^[a-zA-Z-' ]*$/", $username)) {
      $usernameError = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["password"])) {
    $passwordError = "Password is required";
  } else {
    $password = $_POST["password"];
  }

  if (empty($_POST["email"])) {
    $emailError = "Email is required";
  } else {
    $email = $_POST["email"];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailError = "Invalid email format";
    }
  }

  if (empty($_POST["confirmPassword"])) {
    $confirmPasswordError = "Confirm your password";
  } else {
    $confirmPassword = $_POST["confirmPassword"];

    if ($_POST["password"] === $_POST["confirmPassword"]) {
      $password = $_POST["confirmPassword"];
    } else {
      $confirmPasswordError = "Passwords do not match";
    }
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
  <title>Sign Up</title>
</head>

<body>
  <div class="container-fluid">
    <form class="mx-auto" id="signup-form" method="post">
      <h4 class="text-center">Sign Up</h4>
      <div class="row mb-3 mt-5">
        <div class="col">
          <label for="" class="form-label">Username</label>
          <input type="text" name="username" class="form-control">
          <div class="error"><?= $usernameError ?></div>
        </div>
        <div class="col">
          <label for="" class="form-label">Email</label>
          <input type="email" name="email" class="form-control">
          <div class="error"><?= $emailError ?></div>
        </div>
      </div>
      <div class="mb-3 mt-3">
        <label for="" class="form-label">Password</label>
        <input type="password" name="password" class="form-control">
        <div class="error"><?= $passwordError ?></div>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Confirm Password</label>
        <input type="password" name="confirmPassword" class="form-control">
        <div class="error"><?= $confirmPasswordError ?></div>
      </div>
      <button type="submit" class="btn btn-primary mt-5">Sign up</button>
      <div class="button-text mt-2 text-center"><a href="index.php">Login page</a></div>
    </form>
  </div>
</body>

</html>