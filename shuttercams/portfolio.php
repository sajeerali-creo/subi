<?php
/* Template Name: portfolio */
?>
<?php get_header(); ?>
<div class="min-height-100vh">
<section class="py-5">
        
        <div class="px-4 d-flex justify-content-center">
            <ul class="nav nav-pills mb-3 tabs-menu" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#all" type="button" role="tab" aria-controls="pills-home" aria-selected="true">ALL</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#event" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">EVENT</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#coporate" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">CORPORATE</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#birthday" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">BIRTHDAY</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#meternity" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">MATERNITY</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#wedding" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">WEDDING</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#nature" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">NATURAL</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#street" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">STREET</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#videography" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">VIDEOGRAPHY</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#fineart" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">FINE ART</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#realestate" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">REA ESTATE</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#commercial" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Commercial</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#newborn" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">NEW BORN</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#graphic-design" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">GRAPHIC DESIGN</button>
                </li>
            </ul>
        </div>
        
    </section>


    <section class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
            <div class="row g-0">
                <?php 
                    $args = array( 
                        'post_type' => 'photography');
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
        </div>
        <div class="tab-pane fade" id="event" role="tabpanel" aria-labelledby="event-tab">
            <div class="row g-0">
            <?php 
                    $args = array( 
                        'post_type' => 'photography', 'category_name' => 'event');
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
        </div>
        <div class="tab-pane fade" id="coporate" role="tabpanel" aria-labelledby="coporate-tab">
        <?php 
                    $args = array( 
                        'post_type' => 'photography', 'category_name' => 'coporate');
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
       
        <div class="tab-pane fade" id="birthday" role="tabpanel" aria-labelledby="birthday-tab">
            <div class="row g-0">
            <?php 
                    $args = array( 
                        'post_type' => 'photography', 'category_name' => 'birthday');
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
        </div>
        <div class="tab-pane fade" id="meternity" role="tabpanel" aria-labelledby="meternity-tab">
            <div class="row g-0">
            <?php 
                    $args = array( 
                        'post_type' => 'photography', 'category_name' => 'meternity');
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
        </div>
        <div class="tab-pane fade" id="wedding" role="tabpanel" aria-labelledby="wedding-tab">
            <div class="row g-0">
            <?php 
                    $args = array( 
                        'post_type' => 'photography', 'category_name' => 'wedding');
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
        </div>
        <div class="tab-pane fade" id="nature" role="tabpanel" aria-labelledby="nature-tab">
            <div class="row g-0">
            <?php 
                    $args = array( 
                        'post_type' => 'photography', 'category_name' => 'nature');
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
        </div>
        <div class="tab-pane fade" id="street" role="tabpanel" aria-labelledby="street-tab">
            <div class="row g-0">
            <?php 
                    $args = array( 
                        'post_type' => 'photography', 'category_name' => 'street');
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
        </div>
        <div class="tab-pane fade" id="videography" role="tabpanel" aria-labelledby="videography-tab">
            <div class="row g-0">
            <?php 
                    $args = array( 
                        'post_type' => 'photography', 'category_name' => 'videography');
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
        </div>
        <div class="tab-pane fade" id="fineart" role="tabpanel" aria-labelledby="fineart-tab">
            <div class="row g-0">
            <?php 
                    $args = array( 
                        'post_type' => 'photography', 'category_name' => 'fineart');
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
        </div>
        <div class="tab-pane fade" id="realestate" role="tabpanel" aria-labelledby="realestate-tab">
            <div class="row g-0">
            <?php 
                    $args = array( 
                        'post_type' => 'photography', 'category_name' => 'realestate');
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
        </div>
        <div class="tab-pane fade" id="commercial" role="tabpanel" aria-labelledby="commercial-tab">
            <div class="row g-0">
            <?php 
                    $args = array( 
                        'post_type' => 'photography', 'category_name' => 'commercial');
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
        </div>
        <div class="tab-pane fade" id="newborn" role="tabpanel" aria-labelledby="newborn-tab">
            <div class="row g-0">
            <?php 
                    $args = array( 
                        'post_type' => 'photography', 'category_name' => 'newborn');
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
        </div>
        <div class="tab-pane fade" id="graphic-design" role="tabpanel" aria-labelledby="graphic-design-tab">
            <div class="row g-0">
            <?php 
                    $args = array( 
                        'post_type' => 'photography', 'category_name' => 'graphic-design');
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
        </div>
        
    </section>


 

</div>
    <?php get_footer(); ?>