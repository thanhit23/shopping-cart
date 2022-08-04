<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>MK Shop</title>
  <link rel="stylesheet" href="/resources/css/style.css">
  <?php require("../templates/includes/head.php") ?>
</head>
<body>
  <section id="overview">
    <?php require("../templates/includes/header.php") ?>
    <section id="main-content">
      <div id="page-product">
        <div class="container-slide-wrapper">
          <div class="container-slide" id="slide">
              <div class="slide-wrapper">
                  <div class="container-img" id="slide-img">
                      <div class="list-img" id="slide-list-img">
                          <div class="list-item" data-index="0">
                              <img src="/resources/image/slider-11.webp" alt="">
                          </div>
                          <div class="list-item">
                              <img src="/resources/image/slider-12.png" alt="">
                          </div>
                          <div class="list-item">
                              <img src="/resources/image/slider-13.webp" alt="">
                          </div>
                          <div class="list-item">
                              <img src="/resources/image/slider10.webp" alt="">
                          </div>
                          <div class="list-item">
                              <img src="/resources/image/slider-5.jpeg" alt="">
                          </div>
                          <div class="list-item">
                              <img src="/resources/image/slider-1.jpeg" alt="">
                          </div>
                          <div class="list-item">
                              <img src="/resources/image/slider-11.webp" alt="">
                          </div>
                      </div>
                  </div>
                  <ul class="slider-dots">
                      <li class="slider-dot-item select-dot" data-index="0"></li>
                      <li class="slider-dot-item" data-index="1"></li>
                      <li class="slider-dot-item" data-index="2"></li>
                      <li class="slider-dot-item" data-index="3"></li>
                      <li class="slider-dot-item" data-index="4"></li>
                      <li class="slider-dot-item" data-index="5"></li>
                  </ul> 
              </div>
          </div>
        </div>
        <div id="tabs-product" class="container-trend">
          <div class="trend-title">
            <p>Lượt tìm kiếm nhiều nhất</p>
          </div>
          <div class="trend-product">
            <ul class="trend-list">
              <li class="trend--item">
                <a href="javascript:void(0)" class="trend--item__link">
                  <div class="trend__product-wrapper">
                    <div class="_product-image">
                      <img src="/resources/image/product-trend-sandal.jpeg" alt="">
                    </div>
                    <div class="_product-content">
                      <p class="__product-name">Dép nữ</p>
                      <p class="__product-quantity">6k+ sản phẩm</p>
                    </div>
                  </div>
                </a>
              </li>
              <li class="trend--item">
                <a href="javascript:void(0)" class="trend--item__link">
                  <div class="trend__product-wrapper">
                    <div class="_product-image">
                      <img src="/resources/image/product-trend-crossbody-bag.jpeg" alt="">
                    </div>
                    <div class="_product-content">
                      <p class="__product-name">Túi đeo chéo</p>
                      <p class="__product-quantity">6k+ sản phẩm</p>
                    </div>
                  </div>
                </a>
              </li>
              <li class="trend--item">
                <a href="javascript:void(0)" class="trend--item__link">
                  <div class="trend__product-wrapper">
                    <div class="_product-image">
                      <img src="/resources/image/product-trend-t-shirt.jpeg" alt="">
                    </div>
                    <div class="_product-content">
                      <p class="__product-name">Áo phông</p>
                      <p class="__product-quantity">6k+ sản phẩm</p>
                    </div>
                  </div>
                </a>
              </li>
              <li class="trend--item">
                <a href="javascript:void(0)" class="trend--item__link">
                  <div class="trend__product-wrapper">
                    <div class="_product-image">
                      <img src="/resources/image/prouct-trend-coat.jpeg" alt="">
                    </div>
                    <div class="_product-content">
                      <p class="__product-name">Áo khoác</p>
                      <p class="__product-quantity">6k+ sản phẩm</p>
                    </div>
                  </div>
                </a>
              </li>
              <li class="trend--item">
                <a href="javascript:void(0)" class="trend--item__link">
                  <div class="trend__product-wrapper">
                    <div class="_product-image">
                      <img src="/resources/image/product-trend-phone-case.jpeg" alt="">
                    </div>
                    <div class="_product-content">
                      <p class="__product-name">Ốp lưng</p>
                      <p class="__product-quantity">6k+ sản phẩm</p>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="container-product-suggest">
          <div class="product-suggest-title">
            <p>Sản phẩm</p>
          </div>
          <section class="tabs-product-panel">
            <div class="panel__list">
              <?php
                require("../../dbConnection.php");
                $sql = "SELECT id, name, src, price, percentage, quantity_sold FROM products";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                    $id = $row["id"];
                    $name = $row["name"];
                    $dbsrc = $row["src"];
                    $src = json_decode($dbsrc, true);
                    $dbprice = $row["price"];
                    $price = json_decode($dbprice, true);
                    $percentage = $row["percentage"];
                    $quantitySold = $row["quantity_sold"];
                    ?>
                    <div class="panel__item col-lg-2" >
                      <a href="/pages/products/product_detail.php?id=<?php echo $id ?>&userid=<?php echo $_SESSION['id_user'] ?>" class="product__link" data-id="<?php echo $id ?>">
                      <!-- <a href="http://localhost/product/id/<?php echo $id ?>/userid/<?php echo $_SESSION['id_user'] ?>.php" class="product__link" data-id="<?php echo $id ?>"> -->
                        <div class="product__wrapper">
                          <div class="product-image">
                            <img src="<?php echo $src[0] ?>" alt="">
                          </div>
                          <div class="product__content">
                            <div class="name-product_wrapper">
                              <p class="name-product"><?php echo $name ?></p>
                            </div>
                            <div class="price-product">
                              <span class="price">đ<?php echo $price["price_new"] ?></span>
                              <p class="quantity-sold">đã bán <?php echo $quantitySold ?>k</p>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                    <?php
                  }
                } else {
                echo "0 results";
                }
              ?>
            </div>
          </section>
        </div>
      </div>
    </section>
    <?php require("../templates/includes/footer.php") ?>
  </section>
  <script src="./source/js/slider.js"></script>
  <script src="./source/js/main.js"></script>
  <script src="../../resources/js/log_out.js"></script>
</body>
</html>
