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

	<!-- SERVICES -->
	<section class="services shadow-effect">
		<?php $services = new WP_Query(array(
		'post_type' => 'Services',
		'posts_per_page' => -1,
		'order' => "ASC"
		));?>
		<?php if($services->have_posts()) : while($services->have_posts()) : ($services->the_post())?>
			
		<div class="services__card" id="<?php echo 'service-' . get_post_meta(get_the_ID(), 'id', true);?>">
			<div class="services__content">         
				<div class="services__text">
				<h3><?php echo get_the_title()?></h3>
				<p>
					<?php echo get_the_content()?>
				</p>
				<div
					class="services__add max-w-[800px] mx-auto flex flex-wrap justify-center gap-3 pt-4"
				>
					<?php 
						$categories = get_the_category();
						if ( ! empty( $categories ) ) {
							foreach ( $categories as $category ) {?>
							<div
							class="additionals bg-primary text-white p-2 flex items-center gap-2 w-[14rem]"
							>
							<img src="<?php echo get_template_directory_uri()?>/icons/check.svg" class="block w-[1.5rem]" alt="" />
							
							<p class="inline"><?php echo esc_html( $category->name ); ?></p>
							</div>
					<?php  
						}
					}
					?>  
					
				</div>
				</div>
				
				<div class="services__img"><?php if(has_post_thumbnail()) { the_post_thumbnail();}?></div>
				
				<svg
					viewBox="0 0 25 26"
					fill="none"
					xmlns="http://www.w3.org/2000/svg"
				>
					<path
					d="M11.6722 6.87244L2.18298 16.3622C1.72546 16.8197 1.72546 17.5619 2.18298 18.0194L3.28992 19.1263C3.74695 19.5834 4.48718 19.5839 4.94519 19.1283L12.5009 11.6073L20.057 19.1278C20.515 19.5839 21.2552 19.5829 21.7123 19.1259L22.8192 18.0189C23.2767 17.5614 23.2767 16.8192 22.8192 16.3617L13.3295 6.87244C12.8719 6.41492 12.1298 6.41492 11.6722 6.87244Z"
					fill="primary"
					/>
					<path
					d="M11.6722 6.87244L2.18298 16.3622C1.72546 16.8197 1.72546 17.5619 2.18298 18.0194L3.28992 19.1263C3.74695 19.5834 4.48718 19.5839 4.94519 19.1283L12.5009 11.6073L20.057 19.1278C20.515 19.5839 21.2552 19.5829 21.7123 19.1259L22.8192 18.0189C23.2767 17.5614 23.2767 16.8192 22.8192 16.3617L13.3295 6.87244C12.8719 6.41492 12.1298 6.41492 11.6722 6.87244Z"
					fill="primary"
					fill-opacity="0.2"
					/>
					<path
					d="M11.6722 6.87244L2.18298 16.3622C1.72546 16.8197 1.72546 17.5619 2.18298 18.0194L3.28992 19.1263C3.74695 19.5834 4.48718 19.5839 4.94519 19.1283L12.5009 11.6073L20.057 19.1278C20.515 19.5839 21.2552 19.5829 21.7123 19.1259L22.8192 18.0189C23.2767 17.5614 23.2767 16.8192 22.8192 16.3617L13.3295 6.87244C12.8719 6.41492 12.1298 6.41492 11.6722 6.87244Z"
					fill="primary"
					fill-opacity="0.2"
					/>
					<path
					d="M11.6722 6.87244L2.18298 16.3622C1.72546 16.8197 1.72546 17.5619 2.18298 18.0194L3.28992 19.1263C3.74695 19.5834 4.48718 19.5839 4.94519 19.1283L12.5009 11.6073L20.057 19.1278C20.515 19.5839 21.2552 19.5829 21.7123 19.1259L22.8192 18.0189C23.2767 17.5614 23.2767 16.8192 22.8192 16.3617L13.3295 6.87244C12.8719 6.41492 12.1298 6.41492 11.6722 6.87244Z"
					fill="black"
					fill-opacity="0.2"
					/>
				</svg>
			</div>
		</div>

		<?php endwhile;
		else : 
			echo "";
		endif;
		wp_reset_postdata();
		?>
	</section>

	<!-- ORDER -->
	<?php $order = new WP_Query(array(
		'post_type' => 'post',
		'posts_per_page' => 1,
		's' => 'ORDER'
	))?>
	<?php if($order->have_posts()) : while($order->have_posts()) : ($order->the_post())?>

	<section class="servicesOrder bg-cover bg-fixed bg-no-repeat py-10 lg:py-20" 
	style="background-image: url('<?php 
			$featured_image_url = get_the_post_thumbnail_url(get_the_ID()); 
			if ($featured_image_url) {
			echo esc_url($featured_image_url);
			}
		?>');"
	id="order">
	<div class="container">
		<h3
		class="bg-primary lg:py-8 py-4 text-center w-full md:w-[70%] mx-auto max-w-[500px] md:max-w-[1600px] text-white"
		>
		Order Inquiry
		</h3>
		<div
		class="servicesOrder__wrapper p-5 pb-16 md:p-14 grid items-center justify-items-center bg-white w-full max-w-[500px] md:max-w-[1600px] md:w-[70%] mx-auto relative gap-5 md:pb-28 md:gap-7 lg:grid-cols-2 lg:pb-14 lg:px-18"
		>
		<div class="servicesOrder__form grid gap-5 w-full max-w-[25rem]">
			<div>
			<form class="servicesOrder__info grid gap-7">
				<input type="text" id="name" placeholder="Full Name" autocomplete="on" />
				<input type="email" id="email" placeholder="Email Address" autocomplete="on" />
				<input type="url" id="facebook" placeholder="Facebook Link" />
				<button
				type="submit"
				class="btn frms shadow-none absolute bottom-5 md:bottom-14 lg:static"
				onclick="inquire(event)"
				>
				Send Inquiry
				</button>
			</form>
			</div>
		</div>
		<div
			class="servicesOrder__offered grid md:grid-cols-3 justify-center text-center gap-5 lg:gap-3 pb-5"
		>

			<?php $service = new WP_Query(array (
			'post_type' => 'Services',
			'posts_per_page' => -1,
			'order' => "ASC"
			))?>

			<?php if($service->have_posts()) : while($service->have_posts()) : $service->the_post()?>
			<label class="font-semibold" for="<?php echo get_post_meta(get_the_ID(), 'id', true);?>">
			<img src="<?php echo get_template_directory_uri()?>/icons/<?php echo get_post_meta(get_the_ID(), "icon", true)?>" alt="">
			<?php echo str_replace("Assistance", "", get_the_title()) ?></h4>
			<input
				type="checkbox"
				id="<?php echo get_post_meta(get_the_ID(), 'id', true);?>"
				class="h-[12px] w-[12px] lg:h-[20px] lg:w-[20px] border-2 border-black"
			/>
			</label>

			<?php endwhile;
			else:
				echo "";
			endif;
				wp_reset_postdata();
			?>

		</div>
		</div>
	</div>
	</section>

	<?php endwhile;
		else:
			echo "";
		endif;
		wp_reset_postdata();
	?>

<?php get_footer()?>