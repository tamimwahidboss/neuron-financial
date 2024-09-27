<section class="section-padding darker-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8">
						<div class="intro-title text-center">
							<h2><?php echo get_theme_mod('tw_neuron_intro_block_h2') ?></h2>
							<div class="hidden-xs">
								<p><?php echo get_theme_mod('tw_neuron_intro_block_p') ?></p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- single intro -->
                    <?php
                        global $post;
                        $args = array(
                            'post_type' => 'intros',
                            'posts_per_page' => 6,
                            'order' => 'ASC',
                        );
                        $myposts = get_posts($args);
                        foreach( $myposts as $post ) : setup_postdata($post);
                    ?>
					<div class="col-md-4">
						<div class="single-intro">
							<div style="background-image: url(<?php the_post_thumbnail_url(); ?>)" class="intro-img intro-bg1"></div>
							<div class="intro-details text-center">
								<h3><?php the_title(); ?></h3>
								<?php the_content(); ?>
							</div>
						</div>
					</div><?php endforeach; wp_reset_postdata(); ?>
				</div>
			</div>
		</section>