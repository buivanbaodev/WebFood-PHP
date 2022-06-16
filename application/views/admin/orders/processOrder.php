<div class="container table-responsive m-t-20">
    <h2 class="py-3 text-center">ĐƠN HÀNG</h2>
    <table id="myTable" class="table table-bordered table-hover table-striped dataTable">
        <tbody>
            <tr>
                <td><strong>Đã đặt hàng bởi:</strong></td>
                <td><?php echo $order['username'] ?></td>
            </tr>
            <tr>
                <td><strong>Đồ ăn:</strong></td>
                <td><?php echo $order['d_name'] ?></td>
            </tr>
            <tr>
                <td><strong>Số lượng:</strong></td>
                <td><?php echo $order['quantity'] ?></td>
            </tr>
            <tr>
                <td><strong>Price:</strong></td>
                <td><?php echo number_format ($order['price']) ?> VND </td>
            </tr>
            <tr>
                <td><strong>Địa chỉ:</strong></td>
                <td><?php echo $order['address'] ?></td>
            </tr>
            <tr>
                <td><strong>Ngày đặt hàng:</strong></td>
                <td><?php echo $order['date'] ?></td>
            </tr>
            <form method="post" action="<?php echo base_url().'admin/orders/updateOrder/'.$order['o_id']; ?>">
                <tr>
                    <td><strong>Chọn trạng thái đơn hàng:</strong></td>
                    <td>
                        <select class="form-control" name="status"
                            class="<?php echo (form_error('status') != "") ? 'is-invalid' : '';?>">
                            <option>Chọn trạng thái</option>
                            <option value="in process">Đang giao</option>
                            <option value="closed"> Đã giao</option>
                            <option value="rejected">Xóa bỏ</option>
                        </select>
                        <?php echo form_error('status');?>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><button class="btn btn-primary btn-block" type="submit">Lưu</button></td>
                </tr>
            </form>
        </tbody>
    </table>
</div>