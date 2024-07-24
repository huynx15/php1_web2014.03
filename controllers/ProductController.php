<?php 

class ProductController {
    public $product;
    public function __construct() {
        $this->product = new Product();
    }
    public function list(){
        $data = $this->product->getAll();
        require_once './views/products/list.php';
    }

    public function add(){
        if(isset($_POST['btnsend'])){
            $error = [];
            // Lấy dữ liệu từ form
            $name = $_POST['pro_name'];
            if($name == ""){
                $error['name'] = "Bạn chưa nhập Product Name";
            }
            $price = $_POST['pro_price'];
            if($price == ""){
                $error['price'] = "Bạn chưa nhập Product Price";
            }
            $file = $_FILES['pro_upload'];
            // echo $name.$price;
            // Thêm dữ liệu vào db
            if(empty($error)){
                $this->product->insert($name,$price,$file['name']);
                $img_path = './uploads/' . $file['name'];
                // echo $img_path;
                if($file['error'] == 0){
                    move_uploaded_file($file['tmp_name'], $img_path);
                }
                $error['success'] = "Thêm sản phẩm thành công!";
            }
            // Upload File
            // echo "<pre>";
            // print_r($file);
        }
        require_once './views/products/add.php';
    }
}
