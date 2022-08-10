<?php
  session_start();
  require($_SERVER['DOCUMENT_ROOT'] . '/dbConnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Giỏ hàng</title>
  <link rel="stylesheet" href="/resources/css/cart.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <?php require("../templates/includes/head.php") ?>
</head>
<body>
  <?php require("../templates/includes/header.php") ?>
  <section id="main-cart">
    <div class="main-cart-content">
      <div class="bar-classification">
        <div class="cf-checkbox">
          <label for="select-all-products" class="cf_select-product ">
            <input class="cf_stardust-checkbox__input" type="checkbox" id="select-all-products">
            <div class="cf_stardust-checkbox__box"></div>
          </label>
        </div>
        <div class="cf-product">Sản Phẩm</div>
        <div class="cf-unit_price">Đơn giá</div>
        <div class="cf-amount">Số Lượng</div>
        <div class="cf-amount_money">Số Tiền</div>
        <div class="cf-manipulation">Thao tác</div>
      </div>
      <div class="cart-product--list" id="cart-product">
        <?php
          $id_user = (int)$_SESSION["id_user"];
          $sql = "SELECT * FROM `cart` INNER JOIN `products` ON cart.id_product = products.id WHERE id_user = $id_user";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              $id = $row['id'];
              $quantity = $row["quantity"];
              $name = $row["name"];
              $srcOrigin = $row["src"];
              $src = json_decode($srcOrigin, true);
              $dbprice = $row["price"];
              $price = json_decode($dbprice, true);
              ?>
              <div class="cart-product--item" data-id="<?php echo $id ?>">
                <div class="product__checkbox">
                  <input type="checkbox" name="select-product"/>
                </div>
                <div class="product__img-title">
                  <div class="__img-title">
                      <div class="__img-product">
                        <img src="<?php echo $src[0] ?>" alt="">
                      </div>
                      <div class="__img-title">
                        <p><?php echo $name ?></p>
                      </div>
                  </div>
                </div>
                <div class="product__unit_price">
                  <p class="unit-price-of">đ<?php echo $price["price_of"] ?></p>
                  <p class="unit-price-new">đ<?php echo $price["price_new"] ?></p>
                </div>
                <div class="product__amount">
                  <input type="text" name="" class="input__product--selected" value="<?php echo $quantity ?>">
                </div>
                <div class="product__amount_money">đ<span><?php echo $price["price_new"] ?></span></div>
                <div type="submit" class="product__manipulation" name="btn-delete-product">
                  <p class="__manipulation--delete">Xoá</p>
                </div>
              </div>
              <?php
            }
          }
        ?>
      </div>
      <div class="product-payment-container">
        <div class="product-payment-wrapper">
          <div class="payment-checkbox">
            <label for="payment_select-all" class="cf_select-product">
              <input class="cf_stardust-checkbox__input" type="checkbox" id="payment_select-all">
              <div class="cf_stardust-checkbox__box"></div>
            </label>
          </div>
          <div class="payment-select-all">Chọn Tất Cả</div>
          <div>Tổng Thanh Toán</div>
          <div id="total-payments" class="total-payment">đ<span>0</span></div>
          <div class="btn btn-buy-product">Mua Hàng</div>
        </div>
      </div>
    </div>
  </section>
  <?php require("../templates/includes/footer.php") ?>
  <script src="/resources/js/cart.js"></script>
  <script src="../../resources/js/log_out.js"></script>
</body>
</html>