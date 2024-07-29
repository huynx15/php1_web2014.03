<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit Product</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div>
            <input type="text" name="pro_name" placeholder="Product Name" value="<?= $data['name'];?>">
            <p><?php echo $error['name'] ?? '';?></p>
        </div>
        <br>
        <div>
            <input type="text" name="pro_price" placeholder="Product Price" value="<?= $data['price'];?>">
            <p><?php echo $error['price'] ?? '';?></p>
        </div>
        <br>
        <div>
            <?php 
                if($data['image'] != ""){
                    echo "<img src='".IMG_PATH.$data['image']."' alt='' width='60'><br>";
                }
            ?>
            Upload Image: <input type="file" name="pro_upload">
        </div>
        <br>
        <input type="submit" name="btnsend" value="Edit Product">
    </form>
    <p><?php echo $error['success'] ?? '';?></p>
    <p><a href="<?= BASE_DIR; ?>?act=product-list">Danh sách sản phẩm</a></p>
</body>
</html>