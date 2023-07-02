<?php
// Template Name: Homepage

get_header(); ?>

<div class="hero-section" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/images/hero-image.jpeg'; ?>');">
    <h1>Explore our destinations</h1>
</div>

<div class="swiper swiper--locations">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
            <div class="swiper-slide-text">
                <h1>Destination Paradiso ocean view villa</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas enim quia et, repudiandae amet consequatur, ea temporibus aliquam, eaque minus dicta aliquid omnis ullam provident ipsum tenetur ab earum mollitia?</p>
            </div>
            <img src="<?php echo get_template_directory_uri() . '/assets/images/destination1.jpeg'; ?>" alt="Destination Image">
        </div>
        <div class="swiper-slide">
            <div class="swiper-slide-text">
                <h1>Destination Paradiso ocean view villa</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas enim quia et, repudiandae amet consequatur, ea temporibus aliquam, eaque minus dicta aliquid omnis ullam provident ipsum tenetur ab earum mollitia?</p>
            </div>
            <img src="<?php echo get_template_directory_uri() . '/assets/images/destination1.jpeg'; ?>" alt="Destination Image">
        </div>
        <div class="swiper-slide">
            <div class="swiper-slide-text">
                <h1>Destination Paradiso ocean view villa</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas enim quia et, repudiandae amet consequatur, ea temporibus aliquam, eaque minus dicta aliquid omnis ullam provident ipsum tenetur ab earum mollitia?</p>
            </div>
            <img src="<?php echo get_template_directory_uri() . '/assets/images/destination1.jpeg'; ?>" alt="Destination Image">
        </div>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</div>

<?php get_footer();
