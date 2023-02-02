<div class="footer">
    <div class="footer-article">
        <div class="wrap-content d-flex flex-wrap align-items-center justify-content-between">
            <div class="footer-news">
                <div class="d-flex align-items-center justify-content-between">
                    <p class="name-company-footer">Bánh xèo</p>
                    <span class="text-logo-right">Dì út</span>
                </div>
                <div class="footer-info"><?= htmlspecialchars_decode($footer['content' . $lang]) ?></div>
                <?php if (count($social)) { ?>
                    <div class="social social-footer d-flex align-items-center">
                        <?php foreach ($social as $k => $v) { ?>
                            <a href="<?= $v['link'] ?>" target="_blank" class="text-decoration-none mr-2 link-sc-ic">
                                <img class="lazy edit-img-sc" data-src="<?= UPLOAD_PHOTO_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>">
                            </a>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
            <div class="footer-news">
                <?= $addons->set('fanpage-facebook', 'fanpage-facebook', 2); ?>
            </div>
            <div class="footer-news">
                <?= $addons->set('footer-map', 'footer-map', 6); ?>
            </div>
        </div>
    </div>
    <div class="footer-powered">
        <div class="wrap-content d-flex flex-wrap align-items-center justify-content-between">
            <div class="copyright">Copyright <?= $copyright['name' . $lang] ?>. Design by Nina.vn</div>
            <div class="statistic">
                <span><?= dangonline ?>: <?= $online ?></span>
                <span><?= homnay ?>: <?= $counter['today'] ?></span>
                <span><?= homqua ?>: <?= $counter['yesterday'] ?></span>
                <span><?= trongtuan ?>: <?= $counter['week'] ?></span>
                <span><?= trongthang ?>: <?= $counter['month'] ?></span>
                <span><?= tongtruycap ?>: <?= $counter['total'] ?></span>
            </div>
        </div>
    </div>
    <?= $addons->set('messages-facebook', 'messages-facebook', 2); ?>
</div>
<a class="btn-zalo btn-frame text-decoration-none" target="_blank" href="https://zalo.me/<?= preg_replace('/[^0-9]/', '', $optsetting['zalo']); ?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><img data-src="assets/images/zl.png" alt="zalo" class="lazy"></i>
</a>
<a class="btn-phone btn-frame text-decoration-none" href="tel:<?= preg_replace('/[^0-9]/', '', $optsetting['hotline']); ?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><img data-src="assets/images/hl.png" alt="Hotline" class="lazy"></i>
</a>