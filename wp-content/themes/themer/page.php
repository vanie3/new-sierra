<?php get_header(); ?>

			<main role="main">

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
						<p><span>Fact:</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aperiam, debitis deleniti earum enim explicabo ipsa iste itaque maiores officiis, pariatur perspiciatis quis sed, vitae voluptatibus. Dolorum nulla reiciendis repellendus!</p>

						<button class="learn-button">Learn More</button>
					</div>
				</div>

				<!-- section -->
				<section class="container testimonials">

					<h1><?php the_title(); ?></h1>

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