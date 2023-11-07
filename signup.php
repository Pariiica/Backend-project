<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" >
    <title>Sign Up</title>
  </head>
  <body>
        <div class="container-fluid">
            <form class="mx-auto" id="signup-form" method="$_POST">
                <h4 class="text-center">Sign Up</h4>
                <div class="row mb-3 mt-5">
                    <div class="col">
                        <label for="" class="form-label">Username</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col">
                        <label for="" class="form-label">Email</label>
                        <input type="email" class="form-control">
                    </div>
                </div>
                <div class="mb-3 mt-3">
                    <label for="" class="form-label">Password</label>
                    <input type="password" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary mt-5">Sign up</button>
                <div class="button-text mt-2 text-center"><a href="index.html">Login page</a></div>
            </form>
        </div>
  </body>
</html>
<!DOCTYPE html>
