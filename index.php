<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="control.js"></script>
  <link rel="stylesheet" href="node_modules/bootstrap5/src/css/style.css" />
  <title>Welcome</title>
</head>

<body>
  <?php
  if (!empty($_GET['errorLogin'])) {
    echo "<script> alert('Invalid Email or Password. Try Again');</script>";
  } else if (!empty($_GET['errorSignup'])) {
    echo "<script> alert('This email is already registered on the system. Try Again');</script>";
  }

  ?>
  <!-- ##############################################-->
  <!-- ##################### mainform ###################-->
  <div class="container">
    <div class="row justify-content-center align-items-center inner-row">
      <div class="col-lg-5 col-md-7">
        <div class="form-box p-md-5 p-3" id="login-form">
          <div class="form-title">
            <h2 class="fw-bold mb-3">Login</h2>
          </div>
          <form action="Welcome-login.php" method="post" name="loginform" id="loginform">
            <div class="form-floating mb-3">
              <input type="email" class="form-control form-control-sm" placeholder="Email" id="email-login" name="email-login" />
              <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" class="form-control form-control-sm" placeholder="Password" id="password-login" name="password-login" />
              <label for="floatingPassword">Password</label>
            </div>
            <div class="mt-3">
              <input type="submit" value="Login" class="btn primaryBg text-white" id="login-btn" />
            </div>
          </form>
          <br />
          <span> No Account ? </span>
          <button class="p-0 border-0 bg-transparent primaryColor signup-show" onclick="switchingforms()">
            Sign Up
          </button>
        </div>
      </div>
      <div class="form-box registration-form p-5" id="registration-form">
        <div class="form-title">
          <h2 class="fw-bold mb-3">Create Your Account</h2>
        </div>
        <form action="Welcome-Register.php" method="post" name="registration-form" id="registrationform">
          <div class="form-floating mb-3">
            <input type="text" class="form-control form-control-sm" placeholder="Username" id="username" name="username" />
            <label for="floatingInput">Username</label>
          </div>
          <div class="form-floating mb-3">
            <input type="email" class="form-control form-control-sm" placeholder="Email" id="email-registration" name="email-registration" />
            <label for="floatingInput">Email</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control form-control-sm" placeholder="Password" id="password-registration" name="password-registration" />
            <label for="floatingPassword">Password</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control form-control-sm" placeholder="Re-enter Password" id="password2-registration" name="password2-registration" />
            <label for="floatingPassword">Re-enter Password</label>
          </div>
          <div class="mt-3">
            <input type="submit" value="Sign Up" class="btn primaryBg text-white" id="signup-btn" />
          </div>
        </form>
        <br />
        <span> Have an account? </span>
        <button class="p-0 border-0 bg-transparent primaryColor login-show" onclick="switchingforms()">
          Login Here
        </button>
      </div>
    </div>
  </div>

  <!-- #######################################-->
  <!-- ################# Background #################-->
  <div class="background">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </div>
  <!-- ###################################-->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>