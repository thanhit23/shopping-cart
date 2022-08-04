<header id="header">
  <div class="header-wrapper">
    <div class="nav navbar-small">
      <ul class="nav nav-list">
        <li class="nav--item">
          <a href="/home" class="nav--item__link">
            <i class="fa-solid fa-house"></i>
            Trang chủ
          </a>
        </li>
        <li class="nav--item">
          <a href="javascript:void(0)" class="nav--item__link">
            <i class="fa-solid fa-bell"></i>
            Thông Báo
          </a>
        </li>
        <li class="nav--item">
          <a href="javascript:void(0)" class="nav--item__link">
            <i class="fa-solid fa-address-book"></i>
            Trung Tâm Trợ giúp
          </a>
        </li>
        <li class="nav--item">
          <a href="/pages/cart/cart.php" class="nav--item__link">
            <i class="fa-solid fa-cart-shopping icon_cart"></i>
            Giỏ Hàng
          </a>
        </li>
      </ul>
      <ul class="nav nav-list">
        <li class="nav--item">
          <a href="javascript:void(0)" class="nav--item__link">
            <i class="fa-solid fa-earth-europe"></i>
            Ngôn Ngữ
          </a>
        </li>
        <li class="nav--item nav--item-user">
          <a href="<?php if($_SESSION["user"] == null) {
                            echo "/pages/authen/login.php";
                          } else {
                            echo "javascript:void(0);";
                          }?>" class="nav--item__link-user">
            <?php
              if($_SESSION["user"] === null) {
                echo "Đăng Nhập";
              } else { echo $_SESSION["user"]; }
            ?>
          </a>
          <?php
            if($_SESSION["user"] !== null) {
              echo '
                <div class="user--function hover--block">
                  <ul class="user--list">
                    <li class="user__item">
                      <a href="javascript:void(0)">Thông tin</a>
                    </li>
                    <li class="user__item" id="user__item--log-out">
                      Đăng xuất
                    </li>
                  </ul>
                </div>';
            } else { echo ''; }
          ?>
          <!--  -->
        </li>
      </ul>
    </div>
  </div>
</header>
