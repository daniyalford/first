<div class="picParent s2 text-center">
	<h4><?= (isset($username) ? $username : 'مهمان') ?></h4>
	<?php if (isset($profilePicture)) { ?>
		<img src="<?= $profilePicture ?>" alt="profile picture"
			 class="s3">
	<?php } else {
		echo GUEST_PIC;
	} ?>
</div>
<div class="menuRight" style="display: none;">
	<?php if (!empty($menu)) { ?>
		<div class="w-90 mt-1 m_auto">
			<?= $menu ?>
		</div>
	<?php } else { ?>
		<div class="alert m-2 alert_primary rounded_10 box_shadow_warning pd_x_25 text-center">منویی وجود
			ندارد
		</div>
	<?php } ?>
</div>
