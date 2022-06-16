<?php
require_once "includes/header.php";
require_once "includes/contentHandler.php";
?>
<div class="news" id="about">
    <div class="container">
        <div class="news-main_wthree_agile">

        </div>
    </div>
</div>
<!--/tab_section-->
<div class="tabs_section" id="menu">
    <div class="container">
        <h5>Special Menu</h5>
        <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
            <ul class="resp-tabs-list">
                <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"> BREAKFAST</li>
                <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"> LUNCH</li>
                <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"> TO DAY SPECIALS</li>
                <li class="resp-tab-item" aria-controls="tab_item-3" role="tab"> DRINKS</li>
            </ul>




        </div>
    </div>
</div>
<div class="list">
    <div class="row">
        <div class="col-md-12 text-center" style="padding-bottom:25px;padding-top:20px;width:100%">
            <h2 class="title" style="text-shadow:none;">DANH SÁCH TOUR</h2>
        </div>
        <div>
            <?php
            $page = 1;
            if (!isset($_GET["page"])) {
                $_GET["page"] = 1;
            }
            $page = htmlspecialchars($_GET["page"]);

            // $pagingResult = $cth->tourPaging('', $page);
            ?>
            <?php
            $result = $cth->loadTours($page);
            foreach ($result as $row) {
                echo '<div class="col-lg-11 col-md-11 col-sm-12 item-tour">
                                        <div class="item mg-bot30">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="tour-name">
                                                        <a href="tour-detail.php?id=' . ($row['id_tour']) . '"
                                                            title="' . ($row['name_tour']) . '">
                                                            <h3>' . ($row['name_tour']) . '</h3>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3 item-img">
                                                    <div class="pos-relative">
                                                        <a href="tour-detail.php?id=' . ($row['id_tour']) . '"
                                                            title="' . ($row['name_tour']) . '"><img
                                                            src="' . ($row['image']) . '" class="img-responsive pic-lt"
                                                            alt="' . ($row['name_tour']) . '"></a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-9 col-md-9 col-sm-9 info-items">
                                                    <div class="frame-info pos-relative">
                                                        <div class="row">
                                                            <div class="col-md-7 col-sm-7 mg-bot10">
                                                                <div class="f-left l"><img src="assets/img/i-date.png" alt="date">
                                                                </div>
                                                                <div class="f-left r">Ngày đi: 
                                                                <span class="font500">' . ($row['start']) . '</span></div>
                                                                <div class="clear"></div>
                                                            </div>
                                                            <div class="col-md-5 col-sm-5 mg-bot10">
                                                                <div class="f-left l"><img src="assets/img/i-chair.png"
                                                                        alt="chair"></div>
                                                                <div class="f-left r">
                                                                    Phương tiện: <span class="font500">' . ($row['name_vehicle']) . '</span>
                                                                </div>
                                                                <div class="clear"></div>
                                                            </div>
                                                            <div class="col-md-7 col-sm-7 mg-bot10">
                                                                <div class="f-left l"><img src="assets/img/i-price.png"
                                                                        alt="price"></div>
                                                                <div class="f-left r">Giá:
                                                                    <span class="font500 price">' . ($row['price']) . ' VND</span>
                                                                </div>
                                                                <div class="clear"></div>
                                                            </div>
                                                            <div class="col-md-5 col-sm-5">
                                                                <div class="f-left l"><img src="assets/img/i-calendar.png"
                                                                        alt="date"></div>
                                                                <div class="f-left r">Số ngày: <span
                                                                        class="font500">' . ($row['num_days']) . '</span></div>
                                                             <div class="clear"></div>
                                                            </div>                                                        
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
            }
            echo $pagingResult;
            ?>
        </div>
    </div>
</div>
<div class="news" id="about">
    <div class="container">
        <div class="news-main_wthree_agile">

        </div>
    </div>
</div>
<!-- ======= Featured Services Section ======= -->
<section id="featured-services" class="featured-services">
    <div class="container" data-aos="fade-up">

    </div>
</section><!-- End Featured Services Section -->
<?php
require_once "includes/footer.php";

?>