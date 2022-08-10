<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <link rel="stylesheet" href="/resources/css/register.css">
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
            <div class="col-md-6" style="display: flex;justify-content: center;">
              <form class="form" id="form-1">
              <!-- <form  method="get" class="form" id="form-1"> -->
                <h3 class="heading">Đăng Ký</h3>
                <div class="form-group">
                  <label for="fullname" class="form-label">Họ Và Tên<span class="required">*</span></label>
                  <input id="fullname" name="fullname" type="text" placeholder="Tên của bạn" class="form-register form-control">
                  <span class="form-message"></span>
                </div>
                <div class="form-group">
                  <label for="phoneNumber" class="form-label">Số Điện Thoại<span class="required">*</span></label>
                  <input id="phoneNumber" name="phoneNumber" type="text" placeholder="Số điện thoại của bạn" class="form-register form-control">
                  <span class="form-message"></span>
                </div>
                <div class="form-group">
                  <label for="email" class="form-label">Email<span class="required">*</span></label>
                  <input id="email" name="email" type="text" placeholder="Email của bạn" class="form-register form-control">
                  <span class="form-message"></span>
                </div>
                <div class="form-group">
                  <label for="password" class="form-label">Password<span class="required">*</span></label>
                  <input id="password" name="password" placeholder="Nhập password của bạn" type="password" class="form-register form-control">
                  <span class="form-message"></span>
                </div>
                <div class="form-group">
                  <label for="re-enter-password" class="form-label">Re-Password<span class="required">*</span></label>
                  <input id="re-enter-password" name="re-enter-password" placeholder="Nhập lại password của bạn" type="password" class="form-register form-control">
                  <span class="form-message"></span>
                </div>
                <button class="form-submit" name="submit">Đăng ký</button>
                <?php 
                  // if (isset($_POST['submit'])) {
                  //   $name = $_POST['name'];
                  //   if ($name == 'admin') {
                  //     header('Location: a.php?name=admin');
                  //   }
                  // }
                ?>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php require("../templates/includes/footer.php") ?>
  </div>
  <script src="/resources/js/register.js"></script>
</body>
</html>
