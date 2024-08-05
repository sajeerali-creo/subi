<?php
/* Template Name: my-profile */
?>
<?php get_header(); ?>

<?php 
            $args = array( 
                'post_type' => 'about_me', 
                'posts_per_page' => 1);
            $the_query = new WP_Query( $args ); 
        ?>
<?php if ( $the_query->have_posts() ) : ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

<section class="abt-me">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-3">
                <div class="profile-pic">
                    <?php $image = get_field('my-photo');?>
                        <img src="<?php echo $image;?>">
                </div>
            </div>
            <div class="col-lg-8">
                <h2 class="text-white"><?php echo get_the_title(); ?></h2>
                <p class="text-left mb-4">
                <?php echo get_post_meta($post->ID,'about_me',true);?></p>
                <a href="#" class="btn-contact gap-1 align-items-center">Explore My Works</a>
            </div>
            <div class="col-lg-12 mt-5">
                <h2 class="text-white"><?php echo get_post_meta($post->ID,'my_story_label',true);?></h2>
                <p class="text-left mb-4">
                    <?php echo get_post_meta($post->ID,'about-my-story',true);?>
                </p>
            </div>
            <div class="col-lg-12 mt-5">
                <h2 class="text-white mb-4"><?php echo get_post_meta($post->ID,'my-area',true);?></h2>
                <ul>
                    <li>EVENT</li>
                    <li>CORPORATE</li>
                    <li>BIRTHDAY</li>
                    <li>MATERNITY</li>
                    <li>WEDDING</li>
                    <li>NATURAL</li>
                    <li>STREET</li>
                    <li>VIDEOGRAPHY</li>
                    <li>FINE ART</li>
                    <li>REA ESTATE</li>
                    <li>Commercial</li>
                    <li>NEW BORN</li>
                    <li>GRAPHIC DESIGN</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php else:  ?>
<p class="d-flex text-center w-100">
    <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
</p>
<?php endif; ?>


<?php get_footer(); ?>