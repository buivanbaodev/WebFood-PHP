<div class="container p-4">
    <div class="row welcome text-center welcome">
        <div class="col-12">
            <h1 class="display-4">Thực đơn của <?php echo $res['name']; ?></h1>
        </div>
    </div>
    <div class="container res-card">
        <div class="card">
            <?php $img = $res['img'];?>
            <img src="<?php echo base_url().'public/uploads/restaurant/thumb/'.$img; ?>" class="card-img-top" />
            <div class="card-body">
                <h4 class="card-title font-weight-bold text-primary"><?php echo $res['name']; ?></h4>
                <p class="card-text lead"><?php echo $res['address']; ?></p>
                <p class="card-text">
                Một bữa tiệc đang chờ đón bạn với những món ăn siêu hấp dẫn theo mùa được các đầu bếp tuyệt vời của chúng tôi tạo ra bằng tình yêu thương.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="container p-4 dish-card">
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
                        <h4 class="text-muted"><b> <?php echo number_format($dish['price']) ?> VND</b></h4>
                    </div>
                    <p class="card-text"><?php echo $dish['about']; ?></p>
                    <a href="<?php echo base_url().'Dish/addToCart/'.$dish['d_id']; ?>" class="btn btn-primary"><i
                            class="fas fa-shopping-cart"></i> Thêm Vào
                        Giỏ Hàng</a>
                </div>
            </div>
        </div>
        <?php } ?>
        <?php } else { ?>
        <div class="jumbotron">
            <h1>Không có dữ liệu được tìm thấy</h1>
        </div>
        <?php } ?>
    </div>
    <hr class="my-4">
</div>