<div class="container mt-3">
    <div class="container shadow-container">
        <?php if($this->session->flashdata('dish_success') != ""):?>
        <div class="alert alert-success">
            <?php echo $this->session->flashdata('dish_success');?>
        </div>
        <?php endif ?>
        <?php if($this->session->flashdata('error') != ""):?>
        <div class="alert alert-danger">
            <?php echo $this->session->flashdata('error');?>
        </div>
        <?php endif ?>
        <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
                <h2>Tất cả chi tiết menu</h2>
            </div>
            <input class="form-control mb-3" id="myInput" type="text" placeholder="Tìm kiếm .." style="width:50%;">
        </div>
        <div class="table-responsive-sm">
            <table class="table table-bordered table-hover table-striped table-responsive">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tên món ăn</th>
                        <th>Miêu tả</th>
                        <th>Giá</th>
                        <th>Hoạt động</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    <?php if(!empty($dishesh)) { ?>
                    <?php foreach($dishesh as $dish) {?>
                    <tr>
                        <td><?php echo $dish['r_id']; ?></td>
                        <td><?php echo $dish['name']; ?></td>
                        <td><?php echo $dish['about']; ?></td>
                        <td><?php echo number_format($dish['price']) ?> VND</td>
                        <td>
                            <a href="<?php echo base_url().'admin/menu/edit/'.$dish['d_id']; ?>"
                                class="btn btn-info mb-1"><i
                                    class="fas fa-edit mr-1"></i>Sửa</a>

                            <a href="javascript:void(0);" onclick="deleteMenu(<?php echo $dish['d_id']; ?>)"
                                class="btn btn-danger"><i class="fas fa-trash-alt"></i> Xóa</a>

                        </td>
                    </tr>
                    <?php } ?>
                    <?php } else { ?>
                    <tr>
                        <td colspan="4">Hồ sơ không được tìm thấy</td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
function deleteMenu(id) {
    if (confirm("Bạn có chắc chắn muốn xóa món ăn không?")) {
        window.location.href = '<?php echo base_url().'admin/menu/delete/';?>' + id;
    }
}
$(document).ready(function() {
    $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
</script>