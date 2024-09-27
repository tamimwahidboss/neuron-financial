<?php
/**
* Template Name: Home Page
*/

get_header(); ?>
	

<!-- ::::::::::::::::::::: start slider section:::::::::::::::::::::::::: -->
<section class="slider-area">
    <?php
        global $post;
        $args = array(
            'post_type' => 'slides',
            'orderby' => 'menu_order',
            'posts_per_page' => 3,
            'order' => 'ASC'
        );
        $myposts = get_posts($args);
        foreach($myposts as $post) : setup_postdata($post);
    ?>
    <?php
        $btn_text = get_post_meta($post->ID, 'btn_text', true);
        $btn_link = get_post_meta($post->ID, 'btn_link', true);
    ?>

    <!-- slide item one -->
    <div style="background-image: url(<?php the_post_thumbnail_url( 'large' );?>)" class="homepage-slider">
        <div class="display-table">
            <div class="display-table-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="slider-content">
                                <h1><?php the_title(); ?></h1>
                                <p><?php the_content(); ?></p>
                                <a href="<?php echo $btn_link; ?>"><?php echo $btn_text; ?><i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; wp_reset_query(); ?>
</section><!-- slider area end -->

<?php echo get_template_part('content/intro'); ?>
<?php echo get_template_part('content/block-area'); ?>
<?php echo get_template_part('content/service'); ?>




<?php get_footer(); ?>