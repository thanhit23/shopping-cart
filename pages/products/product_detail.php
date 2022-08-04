<?php
  session_start();
  require('../../dbConnection.php');
  $id_product = $_GET;
  $id = (int)$id_product["id"];
  $sql = "SELECT id, name, src, price, percentage, quantity_sold FROM products WHERE id = $id";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $id = $row['id'];
    $name = $row["name"];
    $dbsrc = $row["src"];
    $src = json_decode($dbsrc, true);
    $dbprice = $row["price"];
    $price = json_decode($dbprice, true);
    $percentage = $row["percentage"];
    $quantitySold = $row["quantity_sold"];
    $quantity_purchased = 1;
  } else {
    echo "0 results";
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php require("../templates/includes/head.php")  ?>
    <link rel="stylesheet" href="/resources/css/product_detail.css">
  </head>
  <body>
    <?php require ("../templates/includes/header.php")  ?>
    <section id="main-product-detail">
      <div class="product-briefing" data-id="<?php echo $id ?>">
        <div class="product__image">
          <div class="image__shown">
            <img src="<?php echo $src[0] ?>" alt="">
          </div>
          <div class="image__item-wrapper">
            <?php
              foreach ($src as $value) {
                echo '<div class="image__item">
                          <img src="'. $value .'" alt="">
                        </div>';
              };
            ?>
          </div>
        </div>
        <div class="product__information">
          <div class="product__information-wrapper">
            <div class="infor-product">
              <div class="product__name--title">
                <p class="_name--title"><?php echo $name  ?></p>
              </div>
              <div class="product--assess-container">
                <div class="product-assess-wrapper">
                  <div class="_product--assess">
                    <span class="_assess">4.0</span>
                  </div>
                  <div class="_product--star">
                    <i class="fa-solid fa-star _star"></i>
                    <i class="fa-solid fa-star _star"></i>
                    <i class="fa-solid fa-star _star"></i>
                    <i class="fa-solid fa-star _star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                </div>
                <div class="_product--quantity-sold">
                  <span class="_quantity"><?php echo $quantitySold  ?></span>
                  <span class="_sold">đã bán</span>
                </div>
              </div>
              <div class="product--price">
                <div class="_product-price-of">
                  <p class="price-of">đ<?php echo $price["price_of"] ?></p>
                </div>
                <div class="_product-price-new">
                  <p class="price-new">đ<?php echo $price["price_new"] ?></p>
                </div>
                <div class="_product-percentage-discount">
                  <p class="percentage-discount"><?php echo $percentage ?> giảm</p>
                </div>
              </div>
              <div class="_product--quantity-wrapper">
                <div class="_product--quantity">
                  <p class="__quantity">Số lượng</p>
                </div>
                <div class="_product--selected">
                  <button class="btn btn-reduce">-</button>
                  <input type="text" name="" class="input__product--selected" value="<?php echo $quantity_purchased ?>">
                  <button class="btn btn-increase">+</button>
                </div>
                <div class="_product--total-products">
                  <p class="total-products">1566</p>
                  <p>sản phẩm</p>
                </div>
              </div>
            </div>
            <div class="_product--cart_buy">
              <button type="submit" class="add--cart" name="btn-add-cart">
                <i class="fa-solid fa-cart-plus"></i>
                <p>Thêm vào giỏ hàng</p>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php require("../templates/includes/footer.php") ?>
    <script src="/resources/js/product_detail.js"></script>
    <script src="../../resources/js/log_out.js"></script>
  </body>
</html>