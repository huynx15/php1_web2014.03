<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Add Product</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div>
            <input type="text" name="pro_name" placeholder="Product Name">
            <p><?php echo $error['name'] ?? '';?></p>
        </div>
        <br>
        <div>
            <input type="text" name="pro_price" placeholder="Product Price">
            <p><?php echo $error['price'] ?? '';?></p>
        </div>
        <br>
        <div>
            Upload Image: <input type="file" name="pro_upload">
        </div>
        <br>
        <input type="submit" name="btnsend" value="Add Product">
    </form>
    <p><?php echo $error['success'] ?? '';?></p>
    <p><a href="<?= BASE_DIR; ?>?act=product-list">Danh sách sản phẩm</a></p>
</body>
</html>