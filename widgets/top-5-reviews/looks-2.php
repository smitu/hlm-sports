	<li>
		<div class="top-5-logo-wrap">
			<div class="top-5-position-number">
				<?php echo ($i + 1);?>
			</div>
			<a href="<?php echo get_permalink( $bookmaker_id); ?>">
			<div class="top-5-logo bookmaker-background-wrap-<?php echo $bookmaker_id; ?>">		 
				 <?php $image = get_field('logo_136x44', $bookmaker_id);					                  
						if( $image ) {?>
							<img src="<?php  echo $image['sizes']['hlm_sports_136x44']; ?>" alt="">  							 
						<?php } ?>											
			</div>
			</a>		
		</div>
		<div class="top-5-review-image-wrap">
			<div class="top-5-review-image"> 
		<?php 
				
				$review_img_url = get_the_post_thumbnail_url( $bookmaker_id, 'hlm_sports_290x200' ); 
				
				 ?>
				 <img src="<?php   echo $review_img_url; ?>" alt="">
			</div>
		
			<div class="top-5-review-content-wrap">
				<div class="top-5-tooltip">
					<?php echo $tooltip[$i];	?>
					
				</div>
				<div class="top-5-bonus">
					<?php echo $bonus[$i];	?>
				</div>
				<div class="top-5-star-rating">
						<?php hlm_sports_get_star_rating(get_field('overall_rating', $bookmaker_id));?>
				</div>
				<div class="top-5-review-link">
					<a href="<?php echo get_permalink( $bookmaker_id); ?>">
						review
					</a>
				</div>
				<a href="<?php echo the_field( 'default_tracker' , $bookmaker_id); ?>" target="_blank">
					<div class="top-5-review-bet-now">
                    	<?php the_field('bet_now', 'option');  ?>
					</div>
               	</a>
				<div class="top-5-rules-link">
					<?php the_field('t&c_apply', 'option');  ?>
				</div>



			</div>
		</div>
	</li>