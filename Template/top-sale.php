<!-- Top Sale -->
<?php

shuffle($product_shuffle);

// request method post
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['top_sale_submit'])) {
        // call method addToCart
        $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
    }
}
?>
<section id="top-sale">
    <div class="container py-5">
        <h4 class="font-rubik font-size-20">Bán chạy nhất</h4>
        <hr>
        <!-- owl carousel -->
        <div class="owl-carousel owl-theme">
            <?php foreach ($product_shuffle as $item) { ?>
                <div class="item carousel-inner container py-4">
                    <div class="row">
                        <div class="col-lg">
                            <div class="card">
                                <div class="product font-rale">
                                    <a href="<?php printf('%s?item_id=%s', 'product.php',  $item['item_id']); ?>"><img src="<?php echo $item['item_image'] ?? "./assets/products/1.png"; ?>" alt="product1" style="height:250px"></a>
                                    <div class="text-center">
                                        <h6 style="padding-top: 10px;"><?php echo  $item['item_name'] ?? "Unknown";  ?></h6>
                                        <div class="rating text-warning font-size-12">
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="far fa-star"></i></span>
                                        </div>
                                        <div class="price py-2">
                                            <span><?php echo $item['item_price'] ?? '0'; ?>đ</span>
                                        </div>
                                        <form method="post" class="mb-3">
                                            <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                                            <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                            <?php
                                            if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])) {
                                                echo '<button type="submit" disabled class="btn btn-success font-size-12">Đã thêm</button>';
                                            } else {
                                                echo '<button type="submit" name="top_sale_submit" class="btn color-second-bg font-size-12 text-light">Thêm vào giỏ</button>';
                                            }
                                            ?>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } // closing foreach function 
            ?>
        </div>
        <!-- !owl carousel -->
    </div>
</section>
<!-- Carousel wrapper -->
<!-- Carousel wrapper -->
<!-- !Top Sale -->