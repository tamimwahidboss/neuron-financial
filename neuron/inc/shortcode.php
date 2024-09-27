<?php
function tw_neuron_footer_post($atts) {
    ob_start();
    $query = new WP_Query( array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'order' => 'ASC',
        'orderby' => 'title',
    ) );
    if ( $query->have_posts() ) {
    ?>
    
    <div class="footer-widget latest-post">
        <ul>
            <?php while( $query->have_posts() ) : $query->the_post(); ?>
            <li>
                <?php the_post_thumbnail('small'); ?>
                <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                <span><?php echo get_the_date('d F Y'); ?></span>
            </li>
            <?php endwhile; wp_reset_postdata(); ?>
        </ul>
    </div>

    <?php
        $footer_post = ob_get_clean();
        return $footer_post;
    }
}
add_shortcode('footerWidget', 'tw_neuron_footer_post');
