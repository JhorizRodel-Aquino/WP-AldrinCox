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

    <!-- INTRO -->
    <section class="aboutintro py-10 lg:py-20 shadow-effect">
        <div class="container">
        <div
            class="aboutintro__wrapper text-center grid gap-3 lg:gap-5 max-w-[1100px] mx-auto"
            >

        <?php $intro = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 1,
            's' => 'INTRO'
        ))?>

        <?php if($intro->have_posts()) : while($intro->have_posts()) : ($intro->the_post())?>

            <?php the_content()?>

        <?php endwhile;
        else : 
            echo "";
        endif;
        wp_reset_postdata();
        ?>

        </div>
        </div>
    </section>

    <!-- MOTTO -->
    <?php 
    $motto = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 1,
        's' => 'MOTTO'
    ));
    if($motto->have_posts()) : while($motto->have_posts()) : ($motto->the_post())?>
        
    <section
        class="aboutMotto h-[160px] w-full bg-cover bg-center grid items-center lg:h-[40vh] md:h-[25vh] py-10 lg:py-20"
            style="background-position: center; background-image: url('<?php $featured_image_url = get_the_post_thumbnail_url(get_the_ID()); 
                if ($featured_image_url) {
                    echo esc_url($featured_image_url);
                }
            ?>');">
        
        <div class="container">
            <div class="aboutMotto__wrapper text-center text-white lg:pt-[2rem]">
            
                <?php the_content()?>

            </div>
        </div>
    </section>

    <?php endwhile;
    else : 
        echo "No more posts 🙁";
    endif;
    wp_reset_postdata();
    ?>


    <!-- DREAM -->
    <section class="aboutDream py-10 lg:py-20 bg-secondary">
        <div class="container">
        <?php 
        $dream = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 1,
            's' => 'DREAM'
        ));

        if($dream->have_posts()) : while($dream->have_posts()) : ($dream->the_post())?>

        <div
            class="aboutDream__wrapper lg:flex md:flex md:justify-center items-center lg:justify-center gap-10"
            >
            <img
                src="<?php $featured_image_url = get_the_post_thumbnail_url(get_the_ID()); 
                if ($featured_image_url) {
                    echo esc_url($featured_image_url);
                }
                ?>"
                alt=""
                class="hidden md:block lg:block lg:h-[30rem] md:h-[15rem]"
            />
            <div class="aboutDream__text text-center lg:w-[50%] md:w-[50%]">
                <?php the_content()?>
            </div>
        </div>

        <?php endwhile;
        else : 
            echo "No more posts 🙁";
        endif;
        wp_reset_postdata();
        ?>
        </div>
    </section>

    <!-- TRAVEL -->
    <section class="aboutTravel py-10 lg:py-20">
        <div class="container">
        <div
            class="aboutTravel__wrapper flex flex-col items-center lg:flex-row lg:justify-evenly text-center"
        >
            <h3
            class="decorative lg:text-[70px] lg:leading-[75px] text-[40px] leading-[45px] text-primary"
            >
            Countries I've explored<br class="hidden lg:block" />—and more
            coming soon!
            </h3>
            <div class="aboutTravel__all grid justify-center text-center gap-5">

            <?php $tags = get_tags();
                if ($tags) {
                    foreach ($tags as $tag) {
                        // Create a new WP_Query for each tag
                        $flags = new WP_Query(array(
                            'post_type' => 'Flags',
                            'posts_per_page' => -1,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'post_tag',
                                    'field'    => 'term_id',
                                    'terms'    => $tag->term_id,
                                ),
                            ),
                        )); ?>
                    
                    <div class="aboutTravel__countries">
                        <h4 class="italic font-semibold"><?php echo esc_html($tag->name); ?></h4> <!-- Display the tag name -->
                        <div class="aboutTravel__flags">

                    <?php if ($flags->have_posts()) : while ($flags->have_posts()) : $flags->the_post(); ?>

                                <?php if (has_post_thumbnail()) { ?>
                                    <div class="flag-image">
                                        <?php the_post_thumbnail('thumbnail'); // Display the featured image ?>
                                    </div>
                                <?php } 
                            endwhile; 
                        endif;     
                    ?>
                
                        </div>
                    </div>

                <?php
                wp_reset_postdata();
                }
                } else {
                    echo "No more countries under " . $tag;
                } 
            ?>

            </div>
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