<div class="header">
	<div class="header-bottom">
		<div class="wrap-content d-flex align-items-center justify-content-between">
			<?php if (count($doi_tac_giao_hang)) { ?>
				<div class="list-ic-header">
					<?php foreach ($doi_tac_giao_hang as $k => $v) { ?>
						<a href="<?= $v['link'] ?>" target="_blank" class="link-item-ic-header">
							<img class="lazy img-item-ic-header" data-src="<?= THUMBS ?>/40x40x2/<?= UPLOAD_PHOTO_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>">
						</a>
					<?php } ?>
				</div>
			<?php } ?>
			<a class="logo-header" href="">
				<span class="text-logo-left">
					<?= banhxeo ?>
				</span>
				<span class="text-logo-right"><?= diut ?></span>
			</a>
			<div class="hotline-header">
				<div class="d-flex align-items-center">
					<img src="assets/images/ic-phone.png" class="img-hotline-header" alt="">
					<div>
						<span class="title-hotline d-block">Đặt hàng ngay:</span>
						<span class="number-hotline"><?= $func->formatPhone($optsetting['hotline']) ?></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>