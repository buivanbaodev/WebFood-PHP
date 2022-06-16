<div class="conatiner">

    <form action="<?php echo base_url().'admin/user/create_user'; ?>" method="POST"
        class="form-container mx-auto shadow-container" style="width:80%" id="myForm">
        <h3 class="mb-3 p-2 text-center">Thêm thông tin của người dùng</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="username">Điền tên đăng nhập</label>
                    <input type="text" class="form-control
                    <?php echo (form_error('username') != "") ? 'is-invalid' : '';?>" name="username" id="userName"
                        placeholder="Tên đăng nhập" value="<?php echo set_value('username')?>">
                    <?php echo form_error('username'); ?>
                    <span></span>
                </div>
                <div class="form-group">
                    <label for="firstname">Họ</label>
                    <input type="text" class="form-control
                    <?php echo (form_error('firstname') != "") ? 'is-invalid' : '';?>" name="firstname" id="firstName"
                        placeholder="Họ" value="<?php echo set_value('firstname')?>">
                    <?php echo form_error('firstname'); ?>
                    <span></span>
                </div>
                <div class="form-group">
                    <label for="lastname">Tên</label>
                    <input type="text" class="form-control 
                    <?php echo (form_error('lastname') != "") ? 'is-invalid' : '';?>" name="lastname" id="lastName"
                        placeholder="Tên" value="<?php echo set_value('lastname')?>">
                    <?php echo form_error('lastname'); ?>
                    <span></span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control
                    <?php echo (form_error('email') != "") ? 'is-invalid' : '';?>" name="email" placeholder="Email"
                        id="email" value="<?php echo set_value('email')?>">
                    <?php echo form_error('email'); ?>
                    <span></span>
                </div>
                <div class="form-group">
                    <label for="phone">Số điện thoại</label>
                    <input type="number" class="form-control
                    <?php echo (form_error('phone') != "") ? 'is-invalid' : '';?>" name="phone" placeholder="Sđt"
                        id="phone" value="<?php echo set_value('phone')?>">
                    <?php echo form_error('phone'); ?>
                    <span></span>
                </div>
                <div class="form-group">
                    <label for="password">Mật khẩu</label>
                    <input type="password" class="form-control
                    <?php echo (form_error('password') != "") ? 'is-invalid' : '';?>" name="password" id="pass"
                        placeholder="Mật khẩu" value="<?php echo set_value('password')?>">
                    <?php echo form_error('password'); ?>
                    <span></span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="address">Địa chỉ</label>
            <textarea name="address" type="text" style="height:70px;" id="address" class="form-control
            <?php echo (form_error('address') != "") ? 'is-invalid' : '';?>"
                value="<?php echo set_value('address');?>"></textarea>
            <?php echo form_error('address'); ?>
            <span></span>
        </div>
        <button type="submit" class="btn btn-success">Lưu</button>
        <a href="<?php echo base_url().'admin/user/index'; ?>" class="btn btn-secondary">Hủy bỏ</a>
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

    //Xác thực tên người dùng 
    if (userNameVal === "") {
        setErrorMsg(userName, 'Tên người dùng không để trống');
    } else if (userNameVal.length <= 4 || userNameVal.length >= 16) {
        setErrorMsg(userName, 'Độ dài tên người dùng phải từ 5 đến 15"');
    } else if (!isNaN(userNameVal)) {
        setErrorMsg(userName, 'Chỉ các ký tự được hợp lệ');
    } else {
        setSuccessMsg(userName);
    }

    // Xác thực họ
    if (firstNameVal === "") {
        setErrorMsg(firstName, 'Họ không được để trống');
    } else if (!isNaN(firstNameVal)) {
        setErrorMsg(firstName, 'Chỉ các ký tự được hợp lệ');
    } else {
        setSuccessMsg(firstName);
    }

    //Xác thực tên
    if (lastNameVal === "") {
        setErrorMsg(lastName, 'Tên không được để trống');
    } else {
        setSuccessMsg(lastName)
    }

    // Xác thực địa chỉ emai
    if (emailVal === "") {
        setErrorMsg(email, 'Email không được để trống ');
    } else if (isEmail(emailVal) === "fail") {
        setErrorMsg(email, 'Chỉ email được hợp lệ');
    } else {
        setSuccessMsg(email);
    }

    // xác thực mật khẩu
    if (passVal === "") {
        setErrorMsg(pass, 'Mật khẩu không được để trống');
    } else if (passVal.length <= 7 || passVal.length >= 16) {
        setErrorMsg(pass, 'Độ dài mật khẩu chỉ từ 8 đến 15');
    } else {
        setSuccessMsg(pass);
    }

    //Xác thực sđt 
    if (phoneVal === "") {
        setErrorMsg(phone, 'Sđt không được để trống');
    } else if (phoneVal.length != 10) {
        setErrorMsg(phone, 'Chỉ nhập sđt hợp lệ');
    } else {
        setSuccessMsg(phone);
    }

    // Xác thực địa chỉ
    if (addressVal === "") {
        setErrorMsg(address, 'Địa chỉ không được để trống');
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