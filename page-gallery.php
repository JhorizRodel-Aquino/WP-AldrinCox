<?php get_header()?>

	<!-- BANNER -->
	<section class="banner" 
	style="background-position: center; background-image: url('<?php 
			$featured_image_url = get_the_post_thumbnail_url(get_the_ID()); 
			if ($featured_image_url) {
			echo esc_url($featured_image_url);
			}
		?>');">
		<div class="container">
			<div class="banner__wrapper">
			<h2><?php the_title()?></h2>
			</div>
		</div>
	</section>

	<!-- GALLERY -->
	<section class="gallery py-10 lg:py-20 shadow-effect">
		<div class="container">
			<div class="gallery__wrapper">

			<?php $gallery = new WP_Query(array(
				'post_type' => 'Gallery',
				'posts_per_page' => -1
			))?>
			<?php if($gallery->have_posts()) : while($gallery->have_posts()) : ($gallery->the_post())?>
				
			<div class="gallery__card">
				<?php if(has_post_thumbnail()) {the_post_thumbnail();}?>
				<div class="gallery__text">
					<h4 class="italic"><?php echo mb_strimwidth(get_the_content(), 0, 100, '...')?></h4>
				</div>
				<span></span>
				</div>

			<?php endwhile;
				else : 
				echo "No more posts :(";
				endif;
				wp_reset_postdata();
			?>

			</div>
		</div>
	</section>

	<!-- CTA -->
	<?php $cta = new WP_Query(array(
		'post_type' => 'post',
		'posts_per_page' => 1,
		's' => 'CTA'
	))?>
	<?php if($cta->have_posts()) : while($cta->have_posts()) : ($cta->the_post())?>

	<section class="CTA bg-cover bg-no-repeat bg-center py-14 lg:py-24"
		style="background-image: url('<?php 
			$featured_image_url = get_the_post_thumbnail_url(get_the_ID()); 
			if ($featured_image_url) {
				echo esc_url($featured_image_url);
			}?>');">
		<div class="container">
			<div class="CTA__wrapper grid justify-items-center items-center gap-1 lg:gap-2">
				<?php echo get_the_content();?>
				<a class="btn bg-prmry mt-3 lg:mt-10" href="<?php echo site_url('/services/#order')?>">Inquire Now</a>
			</div>
		</div>
	</section>

	<?php endwhile;
		else : 
			echo "";
		endif;
		wp_reset_postdata();
	?>

<?php get_footer()?>