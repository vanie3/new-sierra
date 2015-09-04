<?php /* Template Name: Home Page */ get_header(); ?>

			<main role="main">

				<div class="mid-page">
					<div class="big-box text-center">
						<div class="row row-boxes">
							<div class="boxes one">
							    <a href="<?php echo esc_url( get_permalink(41) ); ?>">
							        <?php esc_html_e( 'HR Compliance', 'textdomain' ); ?>
                                </a>
                            </div>
							<div class="boxes two">
							    <a href="<?php echo esc_url( get_permalink(45) ); ?>">
							        <?php esc_html_e( 'Background Investigations', 'textdomain' ); ?>
                                </a>
                            </div>
						</div>
						<div class="row row-boxes">
							<div class="boxes three">
							    <a href="<?php echo esc_url( get_permalink(43) ); ?>">
							        <?php esc_html_e( 'Recruitment & Screening', 'textdomain' ); ?>
                                </a>
                            </div>
							<div class="boxes four">
							    <a href="<?php echo esc_url( get_permalink(47) ); ?>">
							        <?php esc_html_e( 'Training & Workshops', 'textdomain' ); ?>
                                </a>
                            </div>
						</div>
					</div>

					<div class="slider mid-copy">
						<div class="cd-testimonials-wrapper cd-container">
							<ul class="cd-testimonials">

							<!-- foreach post create li and put fact post inside it-->
								<?php
                                $args = array( 'post_type' => 'fact');
                                $loop = new WP_Query( $args );
                                while ( $loop->have_posts() ) : $loop->the_post();
                                    echo '<li><p class="fact-text"><span class="facts-title"> ';
                                    the_title();
                                    echo ': </span>';
                                    echo wp_trim_words( get_the_content(), 48, '...' );
                                    echo '</p>';
                                    echo '<button><a href="';
                                    the_permalink();
                                    echo '" rel="bookmark">Learn More</a></button>';
                                    echo '</li>';
                                endwhile;
                            	?>
							</ul> <!-- cd-testimonials -->

						</div> <!-- cd-testimonials-wrapper -->
					</div>
				</div>

				<!-- section -->
				<section class="testimonials">

					<?php if (have_posts()): while (have_posts()) : the_post(); ?>

						<!-- article -->
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<?php the_content(); ?>

                            <div class="testimonial-info">
                                <?php echo types_render_field("author", array("output"=>"html")); ?>

                                <?php echo types_render_field("job-title", array("output"=>"html")); ?>
                            </div>

							<br class="clear">

							<?php edit_post_link(); ?>

						</article> <!-- /article -->

					<?php endwhile; ?>

					<?php else: ?>

						<!-- article -->
						<article>

							<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

						</article> <!-- /article -->

					<?php endif; ?>

				</section> <!-- /section -->
			</main> <!-- /main -->
		</div><!-- container -->
	</div><!-- wrapper -->

<?php get_footer(); ?>