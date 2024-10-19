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

	<!-- FAQS -->
	<section class="faqs py-10 lg:py-20 shadow-effect">
	<div class="container">
		<div class="faqs__wrapper w-full md:w-[80%] lg:w-[70%] mx-auto">
		
		<?php 
		$faq = new WP_Query(array(
			'post_type' => 'FAQs',
			'posts_per_page' => -1,
			'order' => "ASC"
		));?>

		<?php $index = 1 ?> 

		<?php if($faq->have_posts()) : while($faq->have_posts()) : ($faq->the_post())?>
		
		<h5>
			<?php echo $index . ". " . get_the_title()?>
			<svg
			viewBox="0 0 25 26"
			fill="none"
			xmlns="http://www.w3.org/2000/svg"
			>
			<path
				d="M11.6722 6.87244L2.18298 16.3622C1.72546 16.8197 1.72546 17.5619 2.18298 18.0194L3.28992 19.1263C3.74695 19.5834 4.48718 19.5839 4.94519 19.1283L12.5009 11.6073L20.057 19.1278C20.515 19.5839 21.2552 19.5829 21.7123 19.1259L22.8192 18.0189C23.2767 17.5614 23.2767 16.8192 22.8192 16.3617L13.3295 6.87244C12.8719 6.41492 12.1298 6.41492 11.6722 6.87244Z"
				fill="#1D1D1D"
			/>
			<path
				d="M11.6722 6.87244L2.18298 16.3622C1.72546 16.8197 1.72546 17.5619 2.18298 18.0194L3.28992 19.1263C3.74695 19.5834 4.48718 19.5839 4.94519 19.1283L12.5009 11.6073L20.057 19.1278C20.515 19.5839 21.2552 19.5829 21.7123 19.1259L22.8192 18.0189C23.2767 17.5614 23.2767 16.8192 22.8192 16.3617L13.3295 6.87244C12.8719 6.41492 12.1298 6.41492 11.6722 6.87244Z"
				fill="black"
				fill-opacity="0.2"
			/>
			<path
				d="M11.6722 6.87244L2.18298 16.3622C1.72546 16.8197 1.72546 17.5619 2.18298 18.0194L3.28992 19.1263C3.74695 19.5834 4.48718 19.5839 4.94519 19.1283L12.5009 11.6073L20.057 19.1278C20.515 19.5839 21.2552 19.5829 21.7123 19.1259L22.8192 18.0189C23.2767 17.5614 23.2767 16.8192 22.8192 16.3617L13.3295 6.87244C12.8719 6.41492 12.1298 6.41492 11.6722 6.87244Z"
				fill="black"
				fill-opacity="0.2"
			/>
			<path
				d="M11.6722 6.87244L2.18298 16.3622C1.72546 16.8197 1.72546 17.5619 2.18298 18.0194L3.28992 19.1263C3.74695 19.5834 4.48718 19.5839 4.94519 19.1283L12.5009 11.6073L20.057 19.1278C20.515 19.5839 21.2552 19.5829 21.7123 19.1259L22.8192 18.0189C23.2767 17.5614 23.2767 16.8192 22.8192 16.3617L13.3295 6.87244C12.8719 6.41492 12.1298 6.41492 11.6722 6.87244Z"
				fill="black"
				fill-opacity="0.2"
			/>
			</svg>
		</h5>
		<p>
			<?php echo get_the_content()?>
		</p>

		<?php $index++?>

		<?php endwhile;
		else : 
			echo "No more questions.";
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
			echo "No more posts :(";
		endif;
		wp_reset_postdata();
	?>

<?php get_footer()?>