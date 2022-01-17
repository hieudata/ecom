<?php
$item_id = $_GET['item_id'] ?? 1;
foreach ($product->getData() as $item) :
    if ($item['item_id'] == $item_id) :
?>

        <section id="product" class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="<?php echo $item['item_image'] ?? "./assets/products/1.png" ?>" alt="product" class="img-fluid">
                        <div class="form-row pt-4 font-size-16 font-baloo">
                            <div class="col m-1">
                                <button type="submit" class="btn bg-primary form-control text-light">Mua sản phẩm</button>
                            </div>
                            <div class="col m-1">
                                <?php
                                if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])) {
                                    echo '<button type="submit" disabled class="btn btn-success font-size-16 form-control">Đã trong giỏ</button>';
                                } else {
                                    echo '<button type="submit" name="top_sale_submit" class="btn color-second-bg font-size-16 form-control">Thêm vào giỏ</button>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 py-5 font-rubik">
                        <h5 class="font-size-20"><?php echo $item['item_name'] ?? "Unknown"; ?></h5>
                        <small>shop <?php echo $item['item_brand'] ?? "Brand?"; ?></small>
                        <div class="d-flex">
                            <div class="rating text-warning font-size-16">
                                <span class="font-weight-bold">4.0</span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <p class="px-2 font-rubik font-size-16">| 999 đánh giá | 1000+ đã bán</p>
                        </div>
                        <hr class="m-0">

                        <!---    product price       -->
                        <table class="my-3">
                            <tr class="font-rale font-size-14">
                                <td>Giá gốc: </td>
                                <td><strike>199.000đ</strike></td>
                            </tr>
                            <tr class="font-rale font-size-14">
                                <td>Giá bán: </td>
                                <td class="font-size-20 text-danger"><span><?php echo $item['item_price'] ?? 0; ?>đ</span></td>
                            </tr>
                            <tr class="font-rale font-size-14">
                                <td>Tiết kiệm: </td>
                                <td><span class="font-size-16 text-danger">99.000đ</span></td>
                            </tr>
                        </table>
                        <!---    !product price       -->

                        <!--    #policy -->
                        <div class="row">
                            <div class="col-md-3 text-secondary">Vận chuyển:</div>
                            <div class="col-md-9">
                                <p><i class="fas fa-id-card"></i>Miễn phí vận chuyển</p>
                                <p class="font-size-14 text-secondary">Miễn phí vận chuyển cho đơn hàng từ 300đ</p>
                            </div>
                        </div>
                        <!--    !policy -->
                        <hr>

                        <div class="row">
                            <div class="col-6">
                                <!-- color -->
                                <div class="color my-3">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="font-baloo">Màu sắc:</h6>
                                        <div class="p-2 bg-primary rounded-circle"><button class="btn font-size-14"></button></div>
                                        <div class="p-2 bg-warning rounded-circle"><button class="btn font-size-14"></button></div>
                                        <div class="p-2 bg-danger rounded-circle"><button class="btn font-size-14"></button></div>
                                    </div>
                                </div>
                                <!-- !color -->
                            </div>
                            <div class="col-6">
                                <!-- product qty section -->
                                <div class="qty d-flex">
                                    <h6 class="font-baloo">Số lượng</h6>
                                    <div class="px-4 d-flex font-rale">
                                        <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                        <input type="text" data-id="pro1" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                                        <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                    </div>
                                </div>
                                <!-- !product qty section -->
                            </div>
                        </div>

                        <!-- size -->
                        <div class="size my-3">
                            <h6 class="font-baloo">Size :</h6>
                            <div class="d-flex justify-content-between w-75">
                                <div class="font-rubik border p-2">
                                    <button class="btn p-0 font-size-14">S (35 - 40kg)</button>
                                </div>
                                <div class="font-rubik border p-2">
                                    <button class="btn p-0 font-size-14">M (40 - 50kg)</button>
                                </div>
                                <div class="font-rubik border p-2">
                                    <button class="btn p-0 font-size-14">L (50 - 70kg)</button>
                                </div>
                            </div>
                        </div>
                        <!-- !size -->


                    </div>

                    <div class="col-12 mt-4">
                        <h6 class="font-rubik">Chi tiết sản phẩm</h6>
                        <hr>
                        <p class="font-rale font-size-14">- Áo phông Polo nam trắng là sự lựa chọn hoàn hảo cho các chàng trai. Áo 3 màu trung tính rất dễ mặc, form áo vừa vặn cơ thể, thoải mái theo từng cử động.</p>
                        <p class="font-rale font-size-14">- Màu sắc trung tính và phối màu tuyệt vời mà rất ít áo polo có tạo nên sự dễ dàng trong việc phối đồ và tạo ra cho mình nhiều phong cách khác nhau.</p>
                        <p class="font-rale font-size-14">- Áo được làm từ chất liệu cá sấu cotton co giãn với bề mặt vải mềm mại, thấm hút mồ hôi tốt tạo cảm giác thoải mái, thoáng mát cho người mặc. Đây cũng là chất liệu dễ giặt sạch, giúp bạn tiết kiệm một khoảng thời gian đáng kể.</p>
                        <p class="font-rale font-size-14">- Áo chống nhăn tốt, dễ giặt sạch, nhanh khô.</p>
                    </div>
                </div>
            </div>
        </section>

<?php
    endif;
endforeach;
?>