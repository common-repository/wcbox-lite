<?php global $product;
?>
<li class="product woocommerce wcbox_carousel_product">
	<div class="col-xs-12">																
		<div class="wcbox_image">
			<?php
			// Product Image
				if ( has_post_thumbnail() ) {
					$wc_image_url=	 wp_get_attachment_image_src( get_post_thumbnail_id(),'shop_catalog');
				echo '<a href="' . $product->get_permalink() . '"><img src="'.$wc_image_url[0].'" alt="'.get_the_title().'"/></a>';
				} 
				else{ echo '<img src="'.wc_placeholder_img_src('woocommerce_get_image_size_shop_thumbnail').'" alt="" />'; }
				
			// Product On SALE
			if ( $product->is_on_sale() ){
				echo apply_filters( 'woocommerce_sale_flash', '<span class="onsale" style="z-index:1">' . __( 'Sale!', 'wc-box' ) . '</span>',  $product );
			 }
			
			 ?>
		</div>
		<a href="<?php the_permalink(); ?>">
			
				<h3><?php the_title(); ?></h3>
				<?php
			
			
				 if($product->get_rating_html()){
					?>
					<span class="wcbox_product_rating"><?php echo $product->get_rating_html(); ?></span>
					<?php
				}
			
				echo $product->get_price_html();
			
			
			?>	
		</a>	
		
		
	</div>
	<div class="col-xs-12">
		<?php 
			woocommerce_template_loop_add_to_cart();
			
			 ?>
	</div>	
</li>	