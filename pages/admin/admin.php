<?php require("../../dbConnection.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/resources/css/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">
    <title>Quản lý trang</title>
</head>
<body>
    <header id="header">
        <div class="header-wrapper">
            <div class="header-nav">
                <div class="btn-close">
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <div class="name">XIN CHÀO: <?=$_SESSION['user']?></div>
                <ul class="nav_bar">
                    <li><a href="../home/index.php"><i class="fa-solid fa-house-chimney"></i> Trang chủ</a></li>
                    <li><a href="javascript:void(0)"><i class="fa-solid fa-right-from-bracket"> </i> Đăng xuất</a></li>
                </ul>
                <ul>
                    <li><a href="./manager_product.php" target="1"><i class="fa-solid fa-folder-open"></i> Quản lý sản phẩm</a></li>
                    <li><a href="./quanlydh.php" target="1"><i class="fa-solid fa-list-check"></i> Quản lý đơn hàng</a></li>
                    <li><a href="./quanlykh.php" target="1"><i class="fa-solid fa-user-group"></i> Quản lý khách hàng</a></li>
                    <li><a href="./quanlydm.php" target="1"><i class="fa-solid fa-user-group"></i> Quản lý danh mục</a></li>
                </ul>
            </div>
        </div>
    </header>
    <div class="display-nav">
        <i class="fa-solid fa-bars"></i>
    </div>
    <section id="content">
        <div class="right">
            <iframe src="./manager_product.php" frameborder="0" name="1"></iframe>
        </div>
    </section>
    <script src="../../resources/js/admin.js"></script>
</body>
</html>