<div class="container">
    
    <div class="row">
        <div class="col-md-8">
        <h2 class="mt-3">Xem trước đơn hàng</h2>
            <div class="table-responsive-sm">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Món Ăn</th>
                            <th>Giá</th>
                            <th>Số Lượng</th>
                            <th>Tổng Phụ</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        <?php if($this->cart->total_items() > 0) { 
                    foreach($cartItems as $item) { ?>
                        <tr>
                            <td>
                                <?php $image = $item['image'];?>
                                <img class="" width="100"
                                    src="<?php echo base_url().'public/uploads/dishesh/thumb/'.$image; ?>">
                            </td>
                            <td><?php echo $item['name']; ?></td>
                            <td><?php echo number_format(''.$item['price']) ?> VND</td>
                            <td><?php echo $item['qty']; ?></td>
                            <td><?php echo number_format(''.$item['subtotal']) ?> VND</td>
                        </tr>
                        <?php } ?>
                        <?php } else { ?>
                        <tr>
                            <td colspan="5">
                                <p>Không có mục nào trong giỏ hàng của bạn!!</p>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4"></td>
                            <?php  if($this->cart->total_items() > 0) { ?>
                                <td class="text-left">Tổng cộng: <b><?php echo number_format(''.$this->cart->total());?> VND</b></td>
                            <?php } ?>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="col-md-4">
            <form action="<?php echo base_url().'checkout/index';?>" method="POST"
                class="form-container  shadow-container" style="width:80%">
                <h3 class="mt-3"> Chi tiết vận chuyển </h3><hr>
                <div class="form-group">
                    <label for="address"> Địa chỉ </label>
                    <textarea name="address" type="text" style="height:70px;"
                        class="form-control
                    <?php echo (form_error('address') != "") ? 'is-invalid' : '';?>"><?php echo set_value('address', $user['address']);?></textarea>
                    <?php echo form_error('address'); ?>
                </div>
                <p class="lead mb-0">Thanh toán khi giao hàng</p>
                <div class="container p-2 mb-3" style="background: #e5e5e5;">
                    Thanh toán bằng tiền mặt khi giao hàng
                </div>
                <div>
                    <a href="<?php echo base_url().'cart'; ?>" class="btn btn-warning"><i class="fas fa-angle-left"></i>
                        Quay lại giỏ hàng</a>
                    <button type="submit" name="placeOrder" class="btn btn-success">Đặt Hàng <i
                            class="fas fa-angle-right"></i></button>
                </div>
                </from>
        </div>
    </div>
</div>