<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Registrasi</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
  <main>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 login-section-wrapper">
          <div class="brand-wrapper">
            <img src="assets/img/logo.jpg" alt="logo" class="logo">
          </div>
          <div class="login-wrapper my-auto">
            <h1 class="login-title"></h1>
            <form action="#!">
              <div class="form-group mb-4">
                  <label for="name">First name</label>
                  <input type="text" name="name" id="name" placeholder="enter your first name" required>
              </div>
              <div class="form-group mb-4">
                  <label for="name">Last name</label>
                  <input type="text" name="name" id="lastname" placeholder="enter your last name" required>
              </div>
              <div class="form-group mb-4">
                  <label for="email">Email</label>
                  <input type="email" name="email" id="email" placeholder="enter your email" required>
              </div>

              <div class="form-group mb-4">
                  <label for="name">Phone no</label>
                  <input type="number" name="number" id="number" placeholder="+62" required>
              </div>
              <div class="form-group mb-4">
              <label for="password">Password</label>
              <input type="password" name="password" id="password" placeholder="minimum 8 characters" required>
              </div>

              <div>
              <input name="signup" id="signup" class="btn btn-block login-btn" type="button" value="Sign Up">
                  <!-- <button type="submit">Sign Up</button> -->
              </div>
        
            </form>
            <p class="login-wrapper-footer-text">Already have an account? <a href="#!" class="text-reset">Log in</a></p>
          </div>
        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
          <img src="assets/img/gambar.png" alt="login image" class="login-img">
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>

<!-- <form class="form-inline">
  <div class="form-group">
    <label class="sr-only" for="exampleInputEmail3">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
  </div>
  <div class="form-group">
    <label class="sr-only" for="exampleInputPassword3">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-default">Sign in</button>
</form> -->
