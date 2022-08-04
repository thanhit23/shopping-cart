<?php require("../../dbConnection.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../../resources/css/update_product.css">
  <script src="https://kit.fontawesome.com/5b900cdeed.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="mb-3">
            <label for="name" class="form-label">Tên sản phẩm</label>
            <input type="text" class="form-control" name="name_product" id="name" placeholder="Tên sản phẩm...">
          </div>
          <div class="mb-3">
            <label for="src" class="form-label">Hình ảnh</label>
            <div class="form-group">
              <input type="text" class="form-control" name="src_img" id="src_img" placeholder="Src hình ảnh">
              <span>or</span>
              <input type="file" class="form-control" name="file" id="file">
            </div>
          </div>
          <div class="mb-3">
            <label for="src" class="form-label">Giá</label>
            <div class="form-group">
              <input type="text" class="form-control" name="price_of" id="price_of" placeholder="Giá cũ">
              <input type="text" class="form-control" name="price_new" id="price_new" placeholder="Giá mới">
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label">Phần trăm giảm</label>
            <input type="text" class="form-control" name="percentage" id="percentage" placeholder="Phần trăm giảm">
          </div>
          <div class="mb-3">
            <label for="src" class="form-label">Số lượng đã bán</label>
            <input type="text" class="form-control" name="quantity_sold" id="quantity_sold" placeholder="Số lượng sản phẩm đã bán">
          </div>
          <button type="submit" class="btn btn-submit btn-primary">Xác nhận</button>
        </div>
      </div>
    </div>
  </section>
  <script src="./update.js"></script>
</body>
</html>
