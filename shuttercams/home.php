<?php
/* Template Name: home */
?>
<?php get_header(); ?>

<section class="banner">
        <div class="container">
            <h1>My name is Subijith. I’m a photographer</h1>
            <p>Welcome to shuttercams, I'm every snapshot tells a unique story. Whether it's the joy of a maternity, the
                intimacy of a portrait, or the grandeur of nature, we believe in capturing moments that you'll cherish
                forever. Dive into our portfolio to see the world through our lens.</p>
            <div class="d-flex justify-content-center">
                <a href="#" class="btn-contact">Explore My Works</a>
            </div>
        </div>
    </section>


    <section>
        <div class="row g-0">

            <?php 
                $args = array( 'post_type' => 'who_we_are', 'posts_per_page' => 1);
                $the_query = new WP_Query( $args ); 
            ?>
                <?php if ( $the_query->have_posts() ) : ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <div class="col-lg-3 col-md-4 col-sm-6 col-12 p-0">
                    <div class="work-card">
                        <a href="#" class="over-image"><i class="ti ti-capture"></i></a>
                        <?php $image = get_field('photography');?>
                        <img src="<?php echo $image;?>">
                    </div>
                </div>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php else:  ?>
                    <p class="d-flex text-center w-100">
                        <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
                    </p>
            <?php endif; ?>
        </div>
    </section>

    <section class="skills-section">
        <div class="row">
            <div class="col-lg-3 mb-3 mb-lg-0">
                <div class="skill-box">
                    <i class="ti ti-photo-sensor-2 text-white fs-1"></i>
                    <h2 class="text-white fs-4 my-4">Photography</h2>
                    <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ul-trices gravida.</p>
                </div>
            </div>
            <div class="col-lg-3 mb-3 mb-lg-0">
                <div class="skill-box">
                    <i class="ti ti-brand-sublime-text text-white fs-1"></i>
                    <h2 class="text-white fs-4 my-4">Photo Editing</h2>
                    <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ul-trices gravida.</p>
                </div>
            </div>
            <div class="col-lg-3 mb-3 mb-lg-0">
                <div class="skill-box">
                    <i class="ti ti-brand-zoom text-white fs-1"></i>
                    <h2 class="text-white fs-4 my-4">Video & Live Recording</h2>
                    <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ul-trices gravida.</p>
                </div>
            </div>
            <div class="col-lg-3 mb-3 mb-lg-0">
                <div class="skill-box">
                    <i class="ti ti-movie text-white fs-1"></i>
                    <h2 class="text-white fs-4 my-4">Video Editing</h2>
                    <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ul-trices gravida.</p>
                </div>
            </div>
            
        </div>
    </section>

<?php get_footer(); ?>