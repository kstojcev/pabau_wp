<?php
// Template Name: Homepage

get_header(); ?>

<section class="hero-section" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/images/hero-image.jpeg'; ?>');">
    <h1>Explore our destinations</h1>
</section>

<section>
    <div class="swiper swiper--locations">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <?php for ($i = 0; $i < 3; $i++) {
                # code...
            ?>
                <div class="swiper-slide">
                    <div class="swiper-slide-text">
                        <h1>Destination Paradiso ocean view villa</h1>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas enim quia et, repudiandae amet consequatur, ea temporibus aliquam, eaque minus dicta aliquid omnis ullam provident ipsum tenetur ab earum mollitia?</p>
                    </div>
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/destination1.jpeg'; ?>" alt="Destination Image">
                </div>
            <?php } ?>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</section>

<section class="gallery-section">
    <h2>Mini Gallery of the destinations</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus voluptates blanditiis magni quod molestiae libero ex a harum eos corporis, debitis sequi ipsum non obcaecati optio ipsa vero natus sit.</p>

    <div class="gallery-section-grid">
        <?php for ($i = 0; $i < 8; $i++) {
        ?>
            <a class="img-holder" data-fancybox-group="gallery" data-fancybox="gallery" href="<?php echo get_template_directory_uri() . '/assets/images/destination2.jpeg'; ?>">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/destination2.jpeg'; ?>" alt="Destination Image">
            </a>
        <?php
        } ?>
    </div>
</section>

<section class="location-section" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/images/destination3.jpeg'; ?>');">
    <div class="location-section-wrapper">
        <div class="location-section-wrapper-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100415.37127750086!2d13.27488817599994!3d38.14064983496358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1319e8c9814ed099%3A0xa0b042c233bd880!2sPalermo%2C%20PA%2C%20Italy!5e0!3m2!1sen!2smk!4v1688300052590!5m2!1sen!2smk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="location-section-wrapper-text">
            <h2>Location</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore, earum aliquam facere veritatis, id quis sint maxime voluptates a ipsam illum consequatur itaque dolorem ab repudiandae aliquid, magnam natus pariatur!</p>
            <a href="" class="main-btn">Read More</a>
        </div>
    </div>
</section>

<?php get_footer();
