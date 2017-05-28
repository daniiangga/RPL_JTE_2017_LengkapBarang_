<?php
/*
Template Name: Shop
*/
?>
<?php get_header(); ?>
<?php get_sidebar('profile-left'); ?>
<div class="column fivecol">
	<div class="element-title indented">
		<h1><?php _e('Toko Saya', 'makery'); ?></h1>
	</div>
	<?php ThemexInterface::renderTemplateContent('shop-settings'); ?>
	<?php if(ThemexCore::checkOption('shop_multiple')) { ?>
	<span class="secondary"><?php _e('Toko ini tidak ada', 'makery'); ?></span>
	<?php } else if(ThemexShop::$data['status']=='pending') { ?>
	<span class="secondary"><?php _e('Toko ini sedang di review', 'makery'); ?></span>
	<?php } else { ?>
	<?php if(!empty(ThemexShop::$data['ID'])) { ?>
	<form action="" method="POST" id="shop_form_<?php echo ThemexShop::$data['ID']; ?>" class="site-form element-autosave" data-default="shop_form">
	<?php } else { ?>
	<form action="" method="POST" id="shop_form" class="site-form element-autosave">
	<?php } ?>
		<div class="message">
			<?php ThemexInterface::renderMessages(themex_value('success', $_POST, false)); ?>
		</div>
		<table class="profile-fields">
			<tbody>
				<tr>
					<th><?php _e('Nama', 'makery'); ?></th>
					<td>
						<div class="field-wrap">
							<input type="text" name="title" value="<?php echo esc_attr(ThemexShop::$data['profile']['title']); ?>" />
						</div>
					</td>
				</tr>
				<?php if(themex_taxonomy('shop_category')) { ?>
				<tr>
					<th <?php if(ThemexCore::checkOption('shop_category')) { ?>class="large"<?php } ?>><?php _e('Kategori', 'makery'); ?></th>
					<td>
						<?php if(ThemexCore::checkOption('shop_category')) { ?>
						<?php 
						echo ThemexInterface::renderOption(array(
							'id' => 'category',							
							'type' => 'select_category',
							'taxonomy' => 'shop_category',
							'value' => ThemexShop::$data['profile']['category'],
							'wrap' => false,		
							'attributes' => array(
								'multiple' => 'multiple',
							),
						));
						?>
						<?php } else { ?>
						<div class="element-select">
							<span></span>
							<?php 
							echo ThemexInterface::renderOption(array(
								'id' => 'category',
								'type' => 'select_category',
								'taxonomy' => 'shop_category',
								'value' => ThemexShop::$data['profile']['category'],
								'wrap' => false,				
							));
							?>
						</div>
						<?php } ?>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
		<div class="profile-editor">
			<h5><?php _e('Deskripsi Toko', 'makery'); ?></h5>
			<?php ThemexInterface::renderEditor('content', ThemexShop::$data['profile']['content']); ?>
		</div>
		<div class="profile-editor">
			<h5><?php _e('Tentang Toko', 'makery'); ?></h5>
			<?php ThemexInterface::renderEditor('about', ThemexShop::$data['profile']['about']); ?>
		</div>
		<div class="profile-editor">
			<h5><?php _e('Aturan Toko', 'makery'); ?></h5>
			<?php ThemexInterface::renderEditor('policy', ThemexShop::$data['profile']['policy']); ?>
		</div>
		<?php if(ThemexShop::$data['status']=='draft') { ?>
			<?php if(ThemexCore::checkOption('shop_approve')) { ?>
			<a href="#" class="element-button element-submit primary"><?php _e('Simpan', 'makery'); ?></a>
			<?php } else { ?>
			<a href="#" class="element-button element-submit primary"><?php _e('Submit untuk di Review', 'makery'); ?></a>
			<?php } ?>		
		<?php } else { ?>
		<a href="#" class="element-button element-submit primary"><?php _e('Save Changes', 'makery'); ?></a>
		<a href="<?php echo get_permalink(ThemexShop::$data['ID']); ?>" target="_blank" title="<?php _e('Lihat', 'makery'); ?>" class="element-button square secondary">
			<span class="fa fa-eye"></span>
		</a>
		<a href="#remove_form" title="<?php _e('Hapus', 'makery'); ?>" class="element-button element-colorbox secondary square">
			<span class="fa fa-times"></span>
		</a>
		<?php } ?>
		<input type="hidden" name="shop_id" value="<?php echo ThemexShop::$data['ID']; ?>" />
		<input type="hidden" name="shop_action" value="update_profile" />
	</form>
	<div class="site-popups hidden">
		<div id="remove_form">
			<div class="site-popup small">
				<form class="site-form" method="POST" action="">
					<p><?php _e('Apakah kamu yakin ingin menghapus toko ini secara permanen?', 'makery'); ?></p>
					<a href="#" class="element-button element-submit primary"><?php _e('Hapus Toko', 'makery'); ?></a>
					<input type="hidden" name="shop_id" value="<?php echo ThemexShop::$data['ID']; ?>" />
					<input type="hidden" name="shop_action" value="remove_shop" />
				</form>
			</div>
		</div>
	</div>
	<!-- /popups -->
	<?php } ?>
</div>
<?php get_sidebar('profile-right'); ?>
<?php get_footer(); ?>