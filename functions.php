<?php
    require('database/DBController.php');
    require('database/Product.php');
    require ('database/Cart.php');

$db = new DBController();

$product = new Product($db);

$product = new Product($db);
$product_shuffle = $product->getData();
//print_r($product->getData());

$Cart = new Cart($db);
//print_r($Cart->getCartId($product->getData('cart')));



