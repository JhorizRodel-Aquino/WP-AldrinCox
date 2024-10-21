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

	<!-- CONTACT -->
	<section class="contact py-10 lg:py-20 shadow-effect">
	<div class="container">
		<h3 class="decorative lg:text-[70px] lg:leading-[75px] text-[40px] leading-[45px] text-primary mb-3 lg:mb-5">Get in touch with us</h3>
		<form class="contact__wrapper grid gap-5 w-[70%] lg:w-[50%] mx-auto">
		<div class="flex flex-col gap-5 lg:flex-row">
			<input
			class="required"
			type="text"
			id="name"
			name="name"
			placeholder="Full Name"
			autocomplete="on"
			/>
			<input
			class="required"
			type="email"
			id="email"
			name="email"
			placeholder="Email Address"
			autocomplete="on"
			/>
		</div>

		<input
			class="required"
			type="url"
			id="facebook"
			name="facebook"
			placeholder="Facebook Link"
		/>
		<textarea
			class="required"
			placeholder="Message"
			name="message"
			id="message"
			rows="5"
		></textarea>
		<div class="flex justify-center">
			<button
			type="submit"
			class="btn frms shadow-none"
			onclick="sendMail(event)"
			>
			Send Email
			</button>
		</div>
		</form>
	</div>
	</section>

<?php get_footer()?>