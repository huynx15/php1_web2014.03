<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
</head>
<body>
    <h1>Product List</h1>
    <a href="<?= BASE_DIR?>?act=add-product">Add Product</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
        <?php foreach ($data as $pro) { ?>
            <tr>
                <td><?= $pro['id'];?></td>
                <td>
                    <?php 
                        if($pro['image'] != ""){
                            echo "<img src='".IMG_PATH.$pro['image']."' alt='' width='60'>";
                        }
                    ?>
                </td>
                <td><?= $pro['name'];?></td>
                <td><?= $pro['price'];?></td>
                <td>
                    <a href="<?= BASE_DIR?>?act=edit-product&id=<?= $pro['id'];?>">Edit</a>
                    <a href="<?= BASE_DIR?>?act=del-product&id=<?= $pro['id'];?>" onclick="return confirm('Bạn có muốn xóa không?');">Delete</a>
                </td>
            </tr>
        <?php }?>
    </table>
</body>
</html>