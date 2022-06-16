<div class="conatiner">

    <form action="<?php echo base_url().'admin/user/edit/'.$user['u_id']; ?>" method="POST"
        class="form-container mx-auto shadow-container" id="myForm" style="width:80%">
        <h3 class="mb-3 p-2 text-center">Chỉnh sửa người dùng "<?php echo $user['username']; ?>"</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="username">Điền tên đăng nhập</label>
                    <input type="text" id="userName" class="form-control
                    <?php echo (form_error('username') != "") ? 'is-invalid' : '';?>" name="username"
                        value="<?php echo set_value('username', $user['username'])?>">
                    <?php echo form_error('username'); ?>
                    <span></span>
                </div>
                <div class="form-group">
                    <label for="firstname">Họ</label>
                    <input type="text" id="firstName" class="form-control
                    <?php echo (form_error('firstname') != "") ? 'is-invalid' : '';?>" name="firstname"
                        value="<?php echo set_value('firstname', $user['f_name'])?>">
                    <?php echo form_error('firstname'); ?>
                    <span></span>
                </div>
                <div class="form-group">
                    <label for="lastname">Tên</label>
                    <input type="text" id="lastName" class="form-control 
                    <?php echo (form_error('lastname') != "") ? 'is-invalid' : '';?>" name="lastname"
                        value="<?php echo set_value('lastname', $user['l_name'])?>">
                    <?php echo form_error('lastname'); ?>
                    <span></span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" class="form-control
                    <?php echo (form_error('email') != "") ? 'is-invalid' : '';?>" name="email" placeholder="email"
                        value="<?php echo set_value('email', $user['email'])?>">
                    <?php echo form_error('email'); ?>
                    <span></span>
                </div>
                <div class="form-group">
                    <label for="phone">Số điện thoại</label>
                    <input type="number" id="phone" class="form-control
                    <?php echo (form_error('phone') != "") ? 'is-invalid' : '';?>" name="phone" placeholder="Số điện thoại"
                        value="<?php echo set_value('phone', $user['phone'])?>">
                    <?php echo form_error('phone'); ?>
                    <span></span>
                </div>
                <div class="form-group">
                    <label for="password">Mật khẩu</label>
                    <input type="password" id="pass" class="form-control
                    <?php echo (form_error('password') != "") ? 'is-invalid' : '';?>" name="password"
                        placeholder="Mật khẩu" value="<?php echo set_value('password', $user['password'])?>">
                    <?php echo form_error('password'); ?>
                    <span></span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="address">Địa chỉ</label>
            <textarea name="address" id="address" type="text" style="height:70px;"
                class="form-control
            <?php echo (form_error('address') != "") ? 'is-invalid' : '';?>"><?php echo set_value('address', $user['address']);?></textarea>
            <?php echo form_error('address'); ?>
            <span></span>
        </div>
        <button type="submit" class="btn btn-success">Thực hiện thay đổi</button>
        <a href="<?php echo base_url().'admin/user/index'; ?>" class="btn btn-secondary">Trở lại</a>
    </form>
</div>
<script>
const form = document.getElementById('myForm');
const userName = document.getElementById('userName');
const firstName = document.getElementById('firstName');
const lastName = document.getElementById('lastName');
const email = document.getElementById('email');
const pass = document.getElementById('pass');
const phone = document.getElementById('phone');
const address = document.getElementById('address');

form.addEventListener('submit', (event) => {
    event.preventDefault();
    validate();
})

const isEmail = (emailVal) => {
    var re =
        /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (!re.test(emailVal)) {
        return "fail";
    }
}

const sendData = (sRate, count) => {
    if (sRate === count) {
        event.currentTarget.submit();
    }
}

const successMsg = () => {
    let formCon = document.getElementsByClassName('form-control');
    var count = formCon.length - 1;
    for (var i = 0; i < formCon.length; i++) {
        if (formCon[i].className === "form-control success") {
            var sRate = 0 + i;
            sendData(sRate, count);
        } else {
            return false;
        }
    }
}

const validate = () => {
    const userNameVal = userName.value.trim();
    const firstNameVal = firstName.value.trim();
    const lastNameVal = lastName.value.trim();
    const emailVal = email.value.trim();
    const passVal = pass.value.trim();
    const phoneVal = phone.value.trim();
    const addressVal = address.value.trim();

    // Xác thực tên người dùng
    if (userNameVal === "") {
        setErrorMsg(userName, 'Tên người dùng không để trống');
    } else if (userNameVal.length <= 4 || userNameVal.length >= 16) {
        setErrorMsg(userName, 'Độ dài tên người dùng phải từ 5 đến 15"');
    } else if (!isNaN(userNameVal)) {
        setErrorMsg(userName, 'Chỉ các ký tự được phép');
    } else {
        setSuccessMsg(userName);
    }

    // xác thực họ
    if (firstNameVal === "") {
        setErrorMsg(firstName, 'Họ người dùng không để trống');
    } else if (!isNaN(firstNameVal)) {
        setErrorMsg(firstName, 'Chỉ các ký tự được cho phép');
    } else {
        setSuccessMsg(firstName);
    }

    // xác thực tên
    if (lastNameVal === "") {
        setErrorMsg(lastName, 'Tên người dùng không để trống');
    } else {
        setSuccessMsg(lastName)
    }

    //Xác thực email
    if (emailVal === "") {
        setErrorMsg(email, 'Email không để trống');
    } else if (isEmail(emailVal) === "fail") {
        setErrorMsg(email, 'Chỉ nhập email hợp lệ');
    } else {
        setSuccessMsg(email);
    }

    // Xác thực mật khẩu
    if (passVal === "") {
        setErrorMsg(pass, 'Mật khẩu không để trống');
    } else if (passVal.length <= 7 || passVal.length >= 16) {
        setErrorMsg(pass, 'Độ dài phải từ 8 đến 15');
    } else {
        setSuccessMsg(pass);
    }

    // Xác thực sđt
    if (phoneVal === "") {
        setErrorMsg(phone, 'Sđt không để trống');
    } else if (phoneVal.length != 10) {
        setErrorMsg(phone, 'Chỉ nhập số điện thoại hợp lệ');
    } else {
        setSuccessMsg(phone);
    }

    // Xác thực địa chỉ
    if (addressVal === "") {
        setErrorMsg(address, 'Địa chỉ không để trống');
    } else if (addressVal.length < 5) {
        setErrorMsg(address, "Chỉ nhập địa chỉ hợp lệ");
    } else {
        setSuccessMsg(address);
    }

    successMsg();
}

function setErrorMsg(ele, msg) {

    const formCon = ele.parentElement;
    const formInput = formCon.querySelector('.form-control');
    const span = formCon.querySelector('span');
    span.innerText = msg;
    formInput.className = "form-control is-invalid";
    span.className = "invalid-feedback font-weight-bold"
}

function setSuccessMsg(ele) {
    const formCon = ele.parentElement;
    const formInput = formCon.querySelector('.form-control');
    formInput.className = "form-control success";
}
</script>