<!-- ỨNG DỤNG ĐỐI TÁC -->
<?php if (count($app_social)) { ?>
    <div class="list-app-socical">
        <?php foreach ($app_social as $k => $v) { ?>
            <a href="<?= $v['link'] ?>" target="_blank" class="link-app-socical">
                <img class="lazy img-app-socical" data-src="<?= THUMBS ?>/50x50x2/<?= UPLOAD_PHOTO_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>">
            </a>
        <?php } ?>
    </div>
<?php } ?>
<!-- PHẦN CHÀO MỪNG -->
<div class="welcome">
    <img src="assets/images/la-lon.png" class="img-la-lon" alt="">
    <img src="assets/images/la-nho.png" class="img-la-nho" alt="">
    <img src="assets/images/img-ot.png" class="img-ot" alt="">
    <div class="wrap-content">
        <span class="welcome-title">
            <?= chaomungdenvoi ?>
        </span>
        <div class="box-welcome-main">
            <div class="box-wc-left">
                <span class="name-wc-left">
                    <?= banhxeo ?>
                </span>
                <span class="name-wc-right">
                    <?= diut ?>
                </span>
                <div class="content-welcome">
                    <?= htmlspecialchars_decode($static['desc' . $lang]) ?>
                </div>
                <a href="<?= $static['type'] ?>" class="btn-more-welcome">
                    Xem thêm
                </a>
            </div>
            <a href="<?= $static['type'] ?>" class="link-wc-img-center">
                <img class="lazy img-wc-center" onerror="this.src='<?= THUMBS ?>/720x500x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/720x500x1/<?= UPLOAD_NEWS_L . $static['photo'] ?>" />
            </a>
            <a href="<?= $static['type'] ?>" class="link-wc-img-right">
                <img class="lazy img-wc-right" onerror="this.src='<?= THUMBS ?>/310x370x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/310x370x1/<?= UPLOAD_NEWS_L . $static['photo1'] ?>" />
            </a>
        </div>
    </div>
</div>

<!-- PHẦN SẢN PHẨM NỔI BẬC -->
<?php if (count($pronb)) { ?>
    <div class="wrap-product wrap-content">
        <div class="title-main"><span><?= thucdondiut ?></span></div>
        <div class="paging-product"></div>
    </div>
<?php } ?>

<!-- BÌA WEB -->
<div class="banner-w">
    <img src="assets/images/bia-bx.png" class="img-banner" alt="">
</div>

<!-- KHÔNG GIAN QUÁN -->
<?php if (count($khong_gian_quan)) { ?>
    <div class="service-us">
        <div class="wrap-product wrap-content">
            <div class="title-main title-main-kgq">
                <?= khonggianquan ?>
            </div>
            <div class="list-service row">
                <div class="col-item-sv-l col-md-6">
                    <div class="service-item-left">
                        <a href="<?= $khong_gian_quan[0][$sluglang] ?>" title="<?= $khong_gian_quan[0]['name' . $lang] ?>" class="d-block">
                            <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/285x285x1/assets/images/noimage.png';" data-src="<?= UPLOAD_PRODUCT_L . $khong_gian_quan[0]['photo'] ?>" alt="<?= $khong_gian_quan[0]['name' . $lang] ?>" title="<?= $khong_gian_quan[0]['name' . $lang] ?>" />
                        </a>
                    </div>
                </div>
                <div class="col-item-sv col-md-6">
                    <div class="row">
                        <?php foreach ($khong_gian_quan as $k => $v) {
                            if ($k > 0) { ?>
                                <div class="col-item-sv-r col-6">
                                    <a href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>" class="service-img-link-img d-block">
                                        <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/285x285x1/assets/images/noimage.png';" data-src="<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                                    </a>
                                </div>
                        <?php }
                        } ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
<?php } ?>

<!-- NHẬN XÉT TỪ KHÁCH HÀNG -->
<?php if (count($newsnb) || count($videonb) || count($cam_nhan_khach_hang)) { ?>
    <div class="vote-customer">
        <div class="wrap-intro wrap-left d-flex flex-wrap align-items-start justify-content-between">
            <div class="left-intro">
                <p class="title-vote-customer"><span><?= nhanxettukhachhang ?></span></p>
                <p class="desc-vote-cus">
                    <?= $slogan['name' . $lang] ?>
                </p>
                <div class="content-vote-cus">
                    <div class="box-content-cus">
                        <div class="slick-v-4">
                            <?php foreach ($cam_nhan_khach_hang as $v) { ?>
                                <div>
                                    <a class="item-link-ava-author avt-link">
                                        <img onerror="this.src='<?= THUMBS ?>/158x158x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/158x158x1/<?= UPLOAD_NEWS_L . $v['photo'] ?>" class="item-img-ava-author br-100 lazy" alt="<?= $v['name' . $lang] ?>">
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="slick-v-5">
                            <?php foreach ($cam_nhan_khach_hang as $v) { ?>
                                <div class="slick-item-edit">
                                    <p class="desc-cus"><?= $v['desc' . $lang] ?></p>
                                    <span class="name-cus">
                                        <?= $v['name' . $lang] ?> -
                                    </span>
                                    <span class="office-staff">
                                        <?= $v['office' . $lang] ?>
                                    </span>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-intro">
                <div class="videohome-intro">
                    <a data-fancybox="video" data-src="<?= $video['link_video'] ?>" title="<?= $video['name' . $lang] ?>" class="text-decoration-none">
                        <picture class="tab-el-pic">
                            <img class="img-vd" src="<?= THUMBS ?>/663x656x1/<?= UPLOAD_PHOTO_L . $video['photo'] ?>" alt="<?= $video['name' . $lang] ?>">
                        </picture>
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>