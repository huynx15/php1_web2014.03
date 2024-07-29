<?php 
    // Import Config
    require_once './helpers/env.php';
    
    // Import Controller, Model
    require_once './controllers/HomeController.php';
    require_once './controllers/ProductController.php';
    require_once './models/Database.php';
    require_once './models/Product.php';

    $home = new HomeController();
    $product = new ProductController();

    $act = $_GET['act'] ?? '/';
    match ($act) {
        '/' => $home->home(),
        'product-list' => $product->list(),
        'add-product'=> $product->add(),
        'edit-product'=> $product->edit(),
        'del-product'=> $product->delete(),
    };
