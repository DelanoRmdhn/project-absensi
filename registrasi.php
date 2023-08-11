<?php 

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <title>Hello, world!</title>
  </head>
  <body>
  <div class="position-absolute top-0 start-50 translate-middle-x">
    <div class="form-container">
      <div class="d-flex align-items-center">
        <div class="flex-shrink-0">
          <img class="img-register" src="img/register-img.png" alt="...">
        </div>
        
        <div class="flex-grow-1 ms-5">
          <h4 class="login-title">Create your account</h4>
          <form action="" method="post">
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="email" name="username" class="form-control" id="username"  placeholder="Create your Username here">
            </div>
      
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="password" placeholder="Create your Password here">
            </div>

            <div class="mb-3">
              <label for="confirmPassword" class="form-label">Confirm Password</label>
              <input type="Password" name="confirmPasswword" class="form-control" id="confirmPassword"  placeholder="Confirm your Password here">
            </div>
            <div class="mb-3">
            <button button type="submit" class="btn btn-primary">Register!</button>
            </div>
          </form> 
        </div>
      </div>
    </div>
  </div>
  </body>
</html>