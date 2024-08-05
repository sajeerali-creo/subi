<?php
/* Template Name: home */
?>
<?php get_header(); ?>

    <section class="banner">
        <?php 
            $args = array( 
                'post_type' => 'banner', 
                'posts_per_page' => 1);
            $the_query = new WP_Query( $args ); 
        ?>
        <?php if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="container">
            <h1><?php echo get_the_title(); ?></h1>
            <p><?php echo get_post_meta($post->ID,'about',true);?></p>
            <div class="d-flex justify-content-center">
                <a href="/portfolio" class="btn-contact">Explore My Works</a>
            </div>
        </div>
        <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else:  ?>
                <p class="d-flex text-center w-100">
                    <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
                </p>
        <?php endif; ?>
    </section>


    <section>
        <div class="row g-0">

            <?php 
                $args = array( 
                    'post_type' => 'photography', 
                    'posts_per_page' => 8);
                $the_query = new WP_Query( $args ); 
            ?>
                <?php if ( $the_query->have_posts() ) : ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <div class="col-lg-3 col-md-4 col-sm-6 col-12 p-0">
                    <div class="work-card">
                        <a href="<?php the_permalink(); ?>" class="over-image"><i class="ti ti-capture"></i></a>
                        <?php $image = get_field('upload_photography');?>
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
        <?php 
            $args = array( 
                'post_type' => 'skills', 
                'posts_per_page' => 1);
            $the_query = new WP_Query( $args ); 
        ?>
        <?php if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <div class="col-lg-3 mb-3 mb-lg-0">
                <div class="skill-box">
                    <i class="ti <?php echo get_post_meta($post->ID,'icon',true);?> text-white fs-1"></i>
                    <h2 class="text-white fs-4 my-4"><?php echo get_the_title(); ?></h2>
                    <p class="para"><?php echo get_post_meta($post->ID,'about-skills',true);?></p>
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

<?php get_footer(); ?>