<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>HEI</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="csslogin/css/login.css">
</head>
<body style="background-color:#5481b2;">
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="csslogin/images/280633.JPG" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <p><b>T u g a s K i e</b></p>
              </div>
              <p class="login-card-description">Sign into your account</p>
              <form action="cek_login.php" method="post">
                  <div class="form-group">
                    <label >Username</label>
                    <input type="text" name="username" class="form-control">
                  </div>
                  <div class="form-group mb-4">
                    <label >Password</label>
                    <input type="password" name="password"  class="form-control" >
                  </div>
                  <input  class="btn btn-block login-btn mb-4" type="submit" value="Masuk">
                </form>
                <p class="login-card-footer-text">Don't have an account? <a href="#!" class="text-reset">Register here</a></p>

            </div>
          </div>
        </div>
      </div>
     
    </div>
</body>
</html>



