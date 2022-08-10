<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <link rel="stylesheet" href="/resources/css/login.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <?php require("../templates/includes/head.php") ?>
</head>
<body>
  <div id="register">
    <?php require("../templates/includes/header.php") ?>
    <div class="container-main">
      <div class="container-main-wrapper">
        <div class="container">
          <div class="row form-register-wrapper">
            <div class="col-md-6" style="display: flex;justify-content: center;">
              <div class="img-logo-page">
                <a href="/pages/home/index.php">
                  <img src="/resources/image/logo-page-cart.png" alt="">
                </a>
              </div>
            </div>
            <div class="col-md-6 container-form-login">
              <form class="form-login">
                <div class="form-outline mb-4 error-container active-error">
                  <i class="fa-solid fa-circle-xmark"></i>
                  <span class="error-message-form">Tên tài khoản của bạn hoặc Mật khẩu không đúng, vui lòng thử lại</span>
                </div>
                <div class="form-outline mb-4">
                  <label class="form-label" for="form-email">Email address</label>
                  <input type="email" id="form-email" class="form-control" placeholder="Email address..." />
                  <span class="form-message"></span>
                </div>
                <div class="form-outline mb-4">
                  <label class="form-label" for="form-password">Password</label>
                  <input type="password" id="form-password" class="form-control" placeholder="Password..." />
                  <span class="form-message"></span>
                </div>
                <!-- <div class="row mb-4">
                  <div class="col d-flex justify-content-center">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                      <label class="form-check-label" for="form2Example31"> Remember me </label>
                    </div>
                  </div>
                  <div class="col">
                    <a href="#!">Forgot password?</a>
                  </div>
                </div> -->
                <button type="button" class="btn btn-sign-in btn-primary btn-block mb-4">Sign in</button>

                <div class="text-center">
                  <p>Not a member? <a href="../authen/register.php">Register</a></p>
                  <p>or sign up with:</p>
                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-facebook-f"></i>
                  </button>
                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-google"></i>
                  </button>
                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-twitter"></i>
                  </button>
                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-github"></i>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php require("../templates/includes/footer.php") ?>
  </div>
  <script src="/resources/js/login.js"></script>
</body>
</html>
