<div class="author-details">
				<h3 class="author-name">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h3>
				<div class="shop-attributes">
					<ul>						
						<li>
							<?php if(!empty($owner['profile']['location']) && !ThemexCore::checkOption('profile_location')) { ?>
							<span class="fa fa-map-marker"></span>
							<span><?php echo $owner['profile']['location']; ?></span>
							<?php } else if(!ThemexCore::checkOption('shop_favorites')) { ?>
							<span class="fa fa-heart"></span>
							<span><?php echo sprintf(_n('%d Admirer', '%d Admirers', ThemexShop::$data['admirers'], 'makery'), ThemexShop::$data['admirers']);?></span>
							<?php } else if(!ThemexCore::checkOption('shop_sales')) { ?>
							<span class="fa fa-tags"></span>
							<span><?php echo sprintf(_n('%d Sale', '%d Sales', ThemexShop::$data['sales'], 'makery'), ThemexShop::$data['sales']);?></span>
							<?php } ?>
						</li>						
					</ul>
				</div>
