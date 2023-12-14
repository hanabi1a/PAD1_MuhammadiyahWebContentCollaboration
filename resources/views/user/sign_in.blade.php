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
              <h3><strong>Sign In</strong></h3>
              <form action="{{ route('auth') }}" method="post">
                @csrf
                <div class="form-group first">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" placeholder="Username" id="username" name="username">
                  @if ($errors->has('username'))
                  <span class="text-danger">{{ $errors->first('username') }}</span>
                  @endif
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                  @if ($errors->has('password'))
                  <span class="text-danger">{{ $errors->first('password') }}</span>
                  @endif
                </div>

                <div class="d-flex mb-5 align-items-center">
                  <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                    <input type="checkbox" checked="checked" />
                    <div class="control__indicator"></div>
                  </label>
                  <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
                </div>

                <input type="submit" value="Sign In" class="btn btn-block btn-primary">
              </form>
              <p class="text-center">Not a member? <a href="sign_up">Sign Up</a></p>
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