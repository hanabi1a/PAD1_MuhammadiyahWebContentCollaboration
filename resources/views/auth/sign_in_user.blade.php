<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/fonts/icomoon/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style-signin.css">
  <title>Sign In</title>
</head>

<body>
  <div class="container1">
    <div class="d-lg-flex half">
      <div class="bg order-1 order-md-2" style="background-image: url('assets/img/bg-sign-in.png');"></div>
      <div class="contents order-2 order-md-1">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7">
              <h3 class="heading1"><strong>Masuk</strong></h3>
              <form action="" method="post">
                <div class="form-group first">
                  <label for="username">Nama Pengguna</label>
                  <input type="text" class="form-control" placeholder="Nama Pengguna" id="username" name="username">
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Kata Sandi</label>
                  <input type="password" class="form-control" placeholder="Kata Sandi" id="password" name="password">
                </div>

                <div class="d-flex mb-5 align-items-center">
                  <label class="control control--checkbox mb-0">
                    <span class="heading7 caption">Ingat Saya</span>
                    <input type="checkbox" id="rememberCheckbox" />
                      <div class="control__indicator"></div>
                  </label>
                  <span class="ml-auto mt-1"><a href="#" class="forgot-pass">Lupa kata Sandi?</a></span>
                </div>
                <input type="submit" value="Masuk" class="btn btn-block btn-primary">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>