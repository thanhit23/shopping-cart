<?php require("../../dbConnection.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../resources/css/manager_product.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <main class="app-content">
        <h1 class="heading">Danh sách sản phẩm</h1>
        <div class="row">
            <div class="element-button">
                <div class="add">
                    <a href="add-sp.php"><i class="fa-solid fa-plus"></i> Tạo mới sản phẩm</a>
                </div>
            </div>
            <?php 
            $sql = "SELECT * FROM `products`";
            $result = $conn->query($sql);
            ?>
            <table class="table" border="1" id="sampleTable">
                <thead>
                    <tr>
                        <th width="10"><input type="checkbox" id="all"></th>
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Ảnh</th>
                        <th>Giá tiền</th>
                        <th>Phần trăm giảm giá</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($result as $data): 
                        $src = json_decode($data['src']);
                        $price = json_decode($data['price'], true);
                    ?>
                    <tr>
                        <td width="10"><input type="checkbox" name="check1" value="1"></td>
                        <td><?=$data['id']?></td>
                        <td><?=$data['name']?></td>
                        <td><img src="<?=$src[0]?>" alt="" width="80px;"></td>
                        <td>Giá cũ: <?=$price["price_of"]?>  Giá mới: <?=$price["price_new"]?> </td>
                        <td><?=$data['percentage']?></td>
                        <td>
                        <button class="delete" type="button" title="Xóa"><a onclick="return confirm('Are you sure?')" href="delete_sp.php?id=<?php echo $data['Ma_SP']?>">Delete</a></button>
                        <button class="edit" onclick="bruh(<?=$data['Ma_SP']?>)" type="button" title="Sửa" id="show-emp">Sửa</button>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>
<script>

function bruh(id){
    location.href = 'edit_sp.php?id='+id;

}
</script>
</body>
</html>
