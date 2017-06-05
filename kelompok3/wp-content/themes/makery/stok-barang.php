		<thead>
			<tr>
				<th><?php _e('Nama', 'makery'); ?></th>
				<th><?php _e('Stok barang', 'makery'); ?></th>
				<th><?php _e('Harga', 'makery'); ?></th>
				<th>&nbsp;</th>
			</tr>
		</thead>
		
		<tbody>
			<?php 
			foreach(ThemexShop::$data['products'] as $ID) {
			$product=ThemexWoo::getProduct($ID);
			?>
			<tr>
				<td>
					<a href="<?php echo ThemexCore::getURL('shop-product', $product['ID']); ?>" <?php if($product['status']=='draft') { ?>class="secondary"<?php } ?>>
						<?php 
						if(empty($product['title'])) {
							_e('Tidak ada judul', 'makery');
						} else {
							echo $product['title'];
						}
						?>
					</a>
				</td>
				<td>
				<?php 
				if($product['type']=='virtual') {
					echo '&ndash;';
				} else {
					echo $product['object']->get_total_stock();
				}				
				?>
				</td>
		</tbody>