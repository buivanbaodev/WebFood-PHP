<div class="container">
    <div class="container shadow-container">
        <?php if($this->session->flashdata('success') != ""):?>
        <div class="alert alert-success">
            <?php echo $this->session->flashdata('success');?>
        </div>
        <?php endif ?>
        <?php if($this->session->flashdata('error') != ""):?>
        <div class="alert alert-danger">
            <?php echo $this->session->flashdata('error');?>
        </div>
        <?php endif ?>
        <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
                <h2>Người dùng có sẵn</h2>
            </div>
            <input class="form-control mb-3" id="myInput" type="text" placeholder="Tìm kiếm .." style="width:50%;">
        </div>
        <div class="table-responsive-sm">
            <table class="table table-bordered table-striped table-hover table-responsive">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tên tài khoản</th>
                        <th>Họ</th>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Hoạt động</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    <?php if(!empty($users)) {?>
                    <?php foreach($users as $user) { ?>
                    <tr>
                        <td><?php echo $user['u_id']; ?></td>
                        <td><?php echo $user['username']; ?></td>
                        <td><?php echo $user['f_name']; ?></td>
                        <td><?php echo $user['l_name']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td><?php echo $user['phone']; ?></td>
                        <td><?php echo $user['address']; ?></td>
                        <td>
                            <a href="<?php echo base_url().'admin/user/edit/'.$user['u_id'];?>"
                                class="btn btn-info mb-1"><i
                                    class="fas fa-edit mr-1"></i>Sửa</a>
                            <a href="javascript:void(0);" onclick="deleteUser(<?php echo $user['u_id']; ?>)"
                                class="btn btn-danger"><i class="fas fa-trash-alt"></i>Xóa</a>
                        </td>
                    </tr>
                    <?php } ?>
                    <?php } else {?>
                    <tr>
                        <td colspan="8">Hồ sơ không được tìm thấy</td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
function deleteUser(id) {
    if (confirm("Bạn có chắc chắn muốn xóa người dùng không?")) {
        window.location.href = '<?php echo base_url().'admin/user/delete/';?>' + id;
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