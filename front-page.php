<?php get_header()?>

    <!-- INITIALIZATION OF ANIMATION -->
    <span class="moveIn fadeIn absolute opacity-0 z-[-9999]"></span>

    <!-- BANNER -->
    <section class="homeBanner">
      <div
        class="homeBanner__slider bg-[url('../img/banner1.png')] bg-cover bg-no-repeat bg-center overflow-clip absolute w-full z-[1] h-[100dvh]"
      >
        <img src="<?php echo get_template_directory_uri()?>/images/banner2.png" alt="" />
        <img src="<?php echo get_template_directory_uri()?>/images/banner3.png" alt="" />
        <img src="<?php echo get_template_directory_uri()?>/images/banner4.png" alt="" />
        <img src="<?php echo get_template_directory_uri()?>/images/banner1.png" alt="" />
      </div>

      <div class="container">
        <div
          class="homeBanner__wrapper relative z-10 flex-col h-[100dvh] flex justify-center items-center text-white gap-7 lg:gap-9 text-center w-[700px] max-w-[100%] mx-auto"
        >
        <div class="homeBanner__title grid justify-items-center items-center lg:gap-3 text-shadow">
            <h4 class="pb-[6px]"><?php echo get_bloginfo('description')?></h4>
            <?php echo get_the_content();?>
            <a class="btn bg-prmry" href="<?php echo site_url('/services/#order')?>">Inquire Now</a>
        </div>
      </div>
    </section>

    <main>
        <!-- SERVICES -->
        <section class="homeServices py-10 lg:py-20">
            <div class="container">
            <h3
                class="decorative lg:text-[80px] lg:leading-[85px] text-[50px] leading-[55px] text-primary"
            >
                Our Services
            </h3>
            <div
                class="homeServices__wrapper flex flex-wrap items-center justify-center gap-2 lg:gap-7"
            >

            <?php $services = new WP_Query(array(
                'post_type' => 'Services',
                'posts_per_page' => -1,
                'order' => 'ASC'
            ))?>

            <?php if($services->have_posts()) : while($services->have_posts()) : ($services->the_post())?>
            
                <div class="homeServices__card">
                <span>
                    <img src="<?php echo get_template_directory_uri()?>/icons/<?php echo get_post_meta(get_the_ID(), "icon", true)?>" alt="" />
                </span>
                <h4><?php echo str_replace("Assistance", "", get_the_title()) ?></h4>
                <p>
                    <?php echo wp_trim_words(get_the_content(), 30)?>
                </p>
                <a
                    class="btn srvcs mt-3 md:mt-4 lg:mt-6"
                    href="<?php echo site_url('/services/#service-' . get_post_meta(get_the_ID(), 'id', true)); ?>"
                    >Learn More</a
                >
                </div>
                
            <?php endwhile;
                else : 
                echo "";
                endif;
                wp_reset_postdata();
            ?>

            </div>
            </div>
        </section>

        <!-- HEADLINE -->
        <section class="headline bg-primary p-1 lg:p-2 overflow-hidden whitespace-nowrap sticky top-0 z-40">
            <div class="headline__slide">
                <?php $headline = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => 1,
                    's' => 'HEADLINE'
                ))?>

                <?php if($headline->have_posts()) : while($headline->have_posts()) : ($headline->the_post())?>

                    <?php echo get_the_content()?>
                    
                <?php endwhile;
                    else : 
                        echo "";
                    endif;
                    wp_reset_postdata();
                ?>
            </div>

            <div class="headline__slide">
                <?php $headline = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => -1,
                    's' => 'HEADLINE'
                ))?>

                <?php if($headline->have_posts()) : while($headline->have_posts()) : ($headline->the_post())?>

                    <?php echo get_the_content()?>
                    
                <?php endwhile;
                    else : 
                        echo "";
                    endif;
                    wp_reset_postdata();
                ?>
            </div>
        </section>

        <!-- VIDEO -->
        <section class="homeVideo">
            <h3 class="hidden">Highlights</h3>
            <div class="homeVideo__wrapper">
                <div class="video-container relative">
                <img
                    id="thumbnail"
                    src="<?php echo get_template_directory_uri()?>/images/homevideo-cover.jpg"
                    alt="Video Thumbnail"
                />
                <img id="play-button" src="<?php echo get_template_directory_uri()?>/images/play.png')" alt="" class="absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] opacity-85 w-[10rem] cursor-default p-5 z-30" />
                <span id="videoThumbnail"></span>
                </div>
                <video id="videoPlayer" controls poster="<?php echo get_template_directory_uri()?>/images/homevideo-cover.jpg')">
                <source src="<?php echo get_template_directory_uri()?>/images/homevideo.mp4')" type="video/mp4" />
                Your browser does not support HTML video.
                </video>
            </div>
        </section>

        <!-- TESTIMONIALS -->
        <section class="testimonials py-10 lg:py-20">
            <div class="container">
                <h3
                class="decorative lg:text-[80px] lg:leading-[85px] text-[50px] leading-[55px] text-primary"
                >
                Testimonials
                </h3>
                <div class="swiper">
                <div class="testimonials__slider">
                    <div class="swiper-wrapper mb-10">

                    <?php $testimonials = new WP_Query(array(
                        'post_type' => 'Testimonials',
                        'posts_per_page' => -1,
                        'order' => 'ASC'
                    ))?>

                    <?php if($testimonials->have_posts()) : while($testimonials->have_posts()) : ($testimonials->the_post())?>

                        <div class="swiper-slide client">
                            <h5><?php the_title()?></h5>
                            <h6><?php echo get_post_meta(get_the_ID(), "job", true)?></h6>
                            <svg viewBox="0 0 25 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22.6562 11.5H18.75V8.375C18.75 6.65137 20.1514 5.25 21.875 5.25H22.2656C22.915 5.25 23.4375 4.72754 23.4375 4.07812V1.73438C23.4375 1.08496 22.915 0.5625 22.2656 0.5625H21.875C17.5586 0.5625 14.0625 4.05859 14.0625 8.375V20.0938C14.0625 21.3877 15.1123 22.4375 16.4062 22.4375H22.6562C23.9502 22.4375 25 21.3877 25 20.0938V13.8438C25 12.5498 23.9502 11.5 22.6562 11.5ZM8.59375 11.5H4.6875V8.375C4.6875 6.65137 6.08887 5.25 7.8125 5.25H8.20312C8.85254 5.25 9.375 4.72754 9.375 4.07812V1.73438C9.375 1.08496 8.85254 0.5625 8.20312 0.5625H7.8125C3.49609 0.5625 0 4.05859 0 8.375V20.0938C0 21.3877 1.0498 22.4375 2.34375 22.4375H8.59375C9.8877 22.4375 10.9375 21.3877 10.9375 20.0938V13.8438C10.9375 12.5498 9.8877 11.5 8.59375 11.5Z" fill="#BB141B"/>
                            </svg>
                            <p><?php echo get_the_content()?></p>
                        </div>

                    <?php endwhile;
                        else : 
                            echo "";
                        endif;
                        wp_reset_postdata();
                    ?>

                    </div>

                    <div class="swiper-pagination testimonials__pagination"></div>

                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                </div>
            </div>
        </section>

        <hr />

        <!-- ABOUT -->
        <?php $intro = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 1,
            's' => 'INTRO'
        ))?>
        <?php if($intro->have_posts()) : while($intro->have_posts()) : ($intro->the_post())?>

        <section class="homeAbout relative bg-cover bg-no-repeat md:bg-[0_47%] bg-fixed bg-center sm:bg-local"
            style="background-image: url('<?php 
                $featured_image_url = get_the_post_thumbnail_url(get_the_ID()); 
                if ($featured_image_url) {
                    echo esc_url($featured_image_url);
                }
            ?>');">

            <div class="homeAbout__backgroundDivider grid grid-cols-1 sm:grid-cols-[6fr_4fr] grid-rows-[4fr_6fr] sm:grid-rows-1 absolute w-full h-full z-[2]">
                <div class="bg-transparent"></div>
                <div class="bg-white"></div>
            </div>

            <div class="homeAbout__wrapper grid grid-cols-1 sm:grid-cols-[6fr_4fr] justify-center w-full max-w-[500px] sm:max-w-[1600px] mx-auto grid-rows-[4fr_6fr] sm:grid-rows-1">
            <div
                class="homeAbout__card col-[2_/_3] z-20 bg-white text-center py-5 px-7 sm:py-20 sm:px-10 md:py-28 md:px-16 lg:px-20 lg:py-40 xl:py-[13rem] grid gap-3 md:gap-5 lg:gap-10 row-[2_/_3]"
            >
                <h3
                class="decorative text-primary text-center lg:text-[55px] lg:leading-[55px] md:text-[40px] md:leading-[40px] text-4xl font-bold"
                >
                Aldrin Cox <br />
                Visa Services LLC
                </h3>

                <?php echo get_the_excerpt()?>

                <div class="homeAbout__buttons flex flex-wrap justify-center items-center gap-3 md:gap-4 lg:gap-6 mt-3">
                    <a
                        class="btn srvcs w-full max-w-[8rem] lg:max-w-[10rem] lg:hover:bg-white lg:hover:border-primary lg:hover:text-primary"
                        href="<?php echo site_url('/about')?>"
                        >Learn More</a
                    >
                    <a
                        class="btn srvcs w-full max-w-[8rem] lg:max-w-[10rem] lg:hover:bg-white lg:hover:border-primary lg:hover:text-primary"
                        href="<?php echo site_url('/contact')?>"
                        >Get in Touch</a
                    >
                </div>
            </div>
            </div>
        </section>

        <?php endwhile;
            else : 
                echo "";
            endif;
            wp_reset_postdata();
        ?>

        <hr />

        <!-- GALLERY -->
        <section class="homeGallery py-10 lg:py-20">
            <div class="container">
                <h3
                class="decorative lg:text-[80px] lg:leading-[85px] text-[50px] leading-[55px] text-primary"
                >
                Our Gallery
                </h3>
                <div
                class="homeGallery__wrapper max-w-[1000px] mx-auto mt-6 lg:mt-16"
                >
                    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff;" class="swiper mySwiper2">
                        <div class="swiper-wrapper">

                            <?php $gallery = new WP_Query(array(
                                'post_type' => 'Gallery',
                                'posts_per_page' => 8
                            ))?>
                            <?php if($gallery->have_posts()) : while($gallery->have_posts()) : ($gallery->the_post())?>
                    
                                <div class="swiper-slide">
                                    <?php if(has_post_thumbnail()) {the_post_thumbnail();}?>
                                </div>

                            <?php endwhile;
                                else : 
                                    echo "";
                                endif;
                                wp_reset_postdata();
                            ?>
                        
                        </div>

                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">

                            <?php $gallery = new WP_Query(array(
                                'post_type' => 'Gallery',
                                'posts_per_page' => 8
                            ))?>
                            <?php if($gallery->have_posts()) : while($gallery->have_posts()) : ($gallery->the_post())?>
                    
                                <div class="swiper-slide">
                                    <?php if(has_post_thumbnail()) {the_post_thumbnail();}?>
                                </div>

                            <?php endwhile;
                                else : 
                                    echo "";
                                endif;
                                wp_reset_postdata();
                            ?>

                        </div>
                    </div>
                    <h5 class="text-primary z-40 text-end italic hover:underline">
                        <a href="<?php echo site_url('/gallery')?>">See more...</a>
                    </h5>
                </div>
            </div>
        </section>
    </main>

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