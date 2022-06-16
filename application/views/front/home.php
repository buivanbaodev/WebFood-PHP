<div id="slides" class="carousel slide carousel-cus" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1"></li>
        <li data-target="#slides" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?php echo base_url().'public/front/img/bfbrg.jpg';?>" alt="FriesBrgrImg">
            <div class="carousel-caption text-left">
                <h1 class="display-2">Bạn thấy đói bụng?</h1>
                <h3>Tốt, chúng tôi ở đây để phục vụ bạn!</h3>
                <a href="<?php echo base_url().'restaurant/index'?>" class="btn btn-outline-light btn-lg">Đặt hàng ngay</a>
                <a href="<?php echo base_url().'restaurant/index'?>" class="btn btn-primary btn-lg">Xem Menu</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?php echo base_url().'public/front/img/spaghetti-bg.jpg';?>" alt="Spaghetti">
            <div class="carousel-caption text-right">
                <h1 class="display-2">Bạn thấy đói bụng?</h1>
                <h3>Tốt, chúng tôi ở đây để phục vụ bạn</h3>
                <a href="<?php echo base_url().'restaurant/index'?>" class="btn btn-outline-light btn-lg">Đặt hàng ngay</a>
                <a href="<?php echo base_url().'restaurant/index'?>" class="btn btn-primary btn-lg">Xem Menu</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?php echo base_url().'public/front/img/snwbg.jpg';?>" alt="corn">
            <div class="carousel-caption text-right">
                <h1 class="display-2">Bạn thấy đói bụng?</h1>
                <h3>Tốt, chúng tôi ở đây để phục vụ bạn</h3>
                <a href="<?php echo base_url().'restaurant/index'?>" class="btn btn-outline-light btn-lg">Đặt hàng ngay</a>
                <a href="<?php echo base_url().'restaurant/index'?>" class="btn btn-primary btn-lg">Xem Menu</a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid padding">
    <div class="row text-center welcome">
        <div class="col-12">
            <h1 class="display-4">3 bước đơn giản để làm theo</h1>
        </div>
        <hr>
        <div class="col-12">
            <p class="lead">Cách đơn giản nhất đến thức ăn của bạn. Hệ thống đặt hàng thực phẩm cung cấp giao hàng tươi sống
            với trong 30 phút và cung cấp thức ăn miễn phí nếu đặt hàng không đúng giờ. Vì vậy, đừng chờ đợi và bắt đầu đặt hàng ngay bây giờ!</p>
        </div>
    </div>
</div>
<div class="container-fluid padding">
    <div class="row text-center padding">
        <div class="col-xs-12 col-sm-6 col-md-4">
            <i class="fas fa-utensils"></i>
            <h3>Chọn một nhà hàng</h3>
            <p>Điều đầu tiên bạn có thể làm là dễ dàng chọn nhà hàng của chúng tôi!</p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <i class="fas fa-bullseye"></i>
            <h3>Chọn một món ăn ngon</h3>
            <p>Chúng tôi đã cung cấp cho bạn thực đơn từ nhiều nhà hàng trực tuyến khác nhau!</p>
        </div>
        <div class="col-sm-12 col-md-4">
        <i class="fas fa-clipboard-check"></i>
            <h3>Nhận hoặc giao hàng</h3>
            <p>Sau cùng, đồ ăn sẽ được chuyển đến hoặc bạn có thể lấy đồ ăn tại chỗ tùy theo lựa chọn của mình!</p>
        </div>
    </div>
    <hr class="my-4">
</div>
<div class="container-fluid padding">
    <div class="row welcome text-center welcome">
        <div class="col-12">
            <h1 class="display-4">MÓN ĂN PHỔ BIẾN</h1>
        </div>
        <hr>
    </div>
</div>
<div class="container-fluid padding dish-card">
    <div class="row">
        <?php if(!empty($dishesh)) { ?>
        <?php foreach($dishesh as $dish) { ?>
        <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
            <div class="card mb-4 shadow-sm">
                <?php $image = $dish['img'];?>
                <img class="card-img-top" src="<?php echo base_url().'public/uploads/dishesh/thumb/'.$image; ?>">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="card-title"><?php echo $dish['name']; ?></h4>
                        <h4 class="text-muted"><b><?php echo number_format( $dish['price']); ?> VND</b></h4>
                    </div>
                    <p class="card-text"><?php echo $dish['about']; ?></p>
                    <a href="<?php echo base_url().'Dish/addToCart/'.$dish['d_id']; ?>" class="btn btn-primary"><i
                            class="fas fa-cart-plus"></i> Thêm vào
                        giỏ hàng</a>
                </div>
            </div>
        </div>
        <?php } ?>
        <?php } else { ?>
        <div class="jumbotron">
            <h1>No records found</h1>
        </div>
        <?php } ?>
    </div>
    <hr class="my-4">
</div>
<div class="container-fluid padding">
    <div class="row text-center padding">
        <div class="col-12">
            <h2>Liên hệ với chúng tôi</h2>
        </div>
        <div class="col-12 social padding">
            <a href=""><i class="fab fa-facebook"></i></a>
            <a href=""><i class="fab fa-twitter"></i></a>
            <a href=""><i class="fab fa-google-plus-g"></i></a>
            <a href=""><i class="fab fa-instagram"></i></a>
            <a href=""><i class="fab fa-youtube"></i></a>
        </div>
    </div>
</div>
<hr class="my-4">
<section id="contact-us" class="container shadow my-4 p-4">
    <!--Phần tiêu đề-->
    <?php if($this->session->flashdata('msg') != ""):?>
    <div class="alert alert-success">
        <?php echo $this->session->flashdata('msg');?>
    </div>
    <?php endif ?>
    <h2 class="text-center my-2 font-weight-bold">Liên hệ</h2>
    <p class="text-center">Luôn ở đây chờ bạn</p>
    <!--Phần mô tả-->
    <p class="text-center mx-auto mb-5"></p>
    <form name="contact-form" action="<?php echo base_url().'home/sendMail'; ?>" id="myForm" method="POST">
        <div class="row">
            <div class="col-md-6">
                <div class="mb-2">
                    <label class="mb-0" for="name" class="">Họ và tên*</label>
                    <input type="text" id="name" name="name" class="form-control" required <?php set_value("name");?>>
                    <span></span>
                </div>
            </div>
            <div class="col-md-6">
                <div>
                    <label class="mb-0" for="email" class="">Email*</label>
                    <input type="text" id="email" name="email" class="form-control" required <?php set_value("email");?>>
                    <span></span>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="mb-2">
                    <label class="mb-0" for="subject" class="">Chủ đề</label>
                    <input type="text" id="subject" name="subject" class="form-control" <?php set_value("subject");?>>
                    <span></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="mb-2">
                    <label class="mb-0" for="message">Tin nhắn của bạn*</label>
                    <textarea type="text" id="message" name="message" rows="2"
                        class="form-control" required><?php set_value("message");?></textarea>
                    <span></span>
                </div>
            </div>
        </div>
        <div class="status text-danger font-weight-bold my-2"></div>
        <button class="btn btn-info" type="submit">Gửi đi</button>
    </form>

</section>
<script>
const form = document.getElementById('myForm');
const userName = document.getElementById('name');
const email = document.getElementById('email');
const subject = document.getElementById('subject');
const message = document.getElementById('message');

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
    const emailVal = email.value.trim();
    const subjectVal = subject.value.trim();
    const messageVal = message.value.trim();

    // Xác thực tên người dùng
    if (userNameVal === "") {
        setErrorMsg(userName, 'Tên người dùng không để trống');
    } else if (!isNaN(userNameVal)) {
        setErrorMsg(userName, 'Chỉ các ký tự cho phép');
    } else {
        setSuccessMsg(userName);
    }

    //  Xác thực email
    if (emailVal === "") {
        setErrorMsg(email, 'Email không để trống');
    } else if (isEmail(emailVal) === "fail") {
        setErrorMsg(email, 'Chỉ nhập email hợp lệ');
    } else {
        setSuccessMsg(email);
    }

    // Không có chủ đề
    if (subjectVal === "") {
        setErrorMsg(subject, 'Chủ đề không được để trống');
    } else {
        setSuccessMsg(subject);
    }

    // Xác thực tin nhắn
    if (messageVal === "") {
        setErrorMsg(message, 'Tin nhắn không được để trống');
    } else {
        setSuccessMsg(message);
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