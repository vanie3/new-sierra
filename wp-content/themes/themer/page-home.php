<?php /* Template Name: Home Page */ get_header(); ?>

			<main role="main container">

				<div class="container mid-page">
					<div class="big-box">
						<div class="row row-boxes">
							<div class="boxes one"></div>
							<div class="boxes two"></div>
						</div>
						<div class="row row-boxes">
							<div class="boxes three"></div>
							<div class="boxes four"></div>
						</div>
					</div>

					<div class="mid-copy">
					    <div class="entry-content">
                            <?php

                            $args = array( 'post_type' => 'fact');
                            $loop = new WP_Query( $args );
                            while ( $loop->have_posts() ) : $loop->the_post();
                                the_title();
                                echo '<p>';
                                echo wp_trim_words( get_the_content(), 48, '...' );
                                echo '</p>';
                                echo '<button><a href="';
                                the_permalink();
                                echo '" rel="bookmark">Learn More</a></button>';
                            endwhile;

                            ?>
                        </div>
					</div>
				</div>

				<!-- section -->
				<section class="container testimonials">

					<?php if (have_posts()): while (have_posts()) : the_post(); ?>

						<!-- article -->
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<?php the_content(); ?>

							<!--				--><?php //comments_template( '', true ); // Remove if you don't want comments ?>

							<br class="clear">

							<?php edit_post_link(); ?>

						</article>
						<!-- /article -->

					<?php endwhile; ?>

					<?php else: ?>

						<!-- article -->
						<article>

							<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

						</article>
						<!-- /article -->

					<?php endif; ?>

				</section>
				<!-- /section -->
			</main>

			<?php //get_sidebar(); ?>

		</div>
	</div>
</div>
<?php get_footer(); ?>