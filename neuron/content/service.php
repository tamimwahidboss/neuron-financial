<!-- ::::::::::::::::::::: start services section:::::::::::::::::::::::::: -->
<section class="section-padding darker-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
                <div class="template-title text-center">
                    <h2>We Provide Huge Range of Services</h2>
                    <p>Holisticly transform excellent systems rather than collaborative leadership. Credibly pursue compelling outside the box.</p>
                </div>
            </div>
        </div>
        
        <div class="row">
            <?php
                global $post;
                $args = array(
                    'post_type' => 'services',
                    'posts_per_page' => 6,
                    'order' => 'ASC',
                );
                $myposts = get_posts($args);
                foreach( $myposts as $post ) : setup_postdata($post);
            ?>
            <!-- single service -->
            <div class="col-sm-6 col-md-4">
                <div class="services-tiem">
                    <img src="<?php the_post_thumbnail_url('small'); ?>">
                    <h3> <?php the_title(); ?> </h3>
                    <?php the_content(); ?>
                </div>
            </div><?php endforeach; wp_reset_query(); ?>
        </div>
    </div>
</section><!-- end services section -->
