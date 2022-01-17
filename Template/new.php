<?php
shuffle($product_shuffle);
//request method post
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['new_phones_submit'])) {
        // call method addTocart
        $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
    }
}
?>

<section id="new-phones">
    <div class="container">
        <h4 class="font-rubik font-size-20">Hàng sắp về</h4>
        <hr>

        <!-- owl carousel -->
        <div class="owl-carousel owl-theme">
            <?php foreach ($product_shuffle as $item) { ?>
                <div class="item carousel-inner container py-4">
                    <div class="row">
                        <div class="col-lg">
                            <div class="card" style="background-color: #ecf0f1;">
                                <a href="#"><img src="<?php echo $item['item_image'] ?? "./assets/products/1.png"; ?>" alt="product1" class="img-fluid" style="height: 250px;"></a>
                                <div class="text-center">
                                    <h6><?php echo $item['item_name'] ?? "Unknown"; ?></h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span><?php echo $item['item_price'] ?? "O"; ?>đ</span>
                                    </div>
                                    <form class="p-2" action="" method="POST">
                                        <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                                        <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                        <?php
                                        if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])) {
                                            echo '<button type="submit" disabled class="btn btn-success font-size-12">Đã thêm</button>';
                                        } else {
                                            echo '<button type="submit" name="new_phones_submit" class="btn color-second-bg font-size-12">Thêm vào giỏ</button>';
                                        }
                                        ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <!-- !owl carousel -->

    </div>
</section>