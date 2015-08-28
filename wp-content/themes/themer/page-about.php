<?php /* Template Name: About Page */ get_header(); ?>

    <main role="main">
        <!-- section -->
        <section class="col-md-10">

            <h1><?php the_title(); ?></h1>

            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                <!-- article -->
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <?php the_content(); ?>

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

        <aside class="col-md-2">
            <?php dynamic_sidebar('widget-area-2'); ?>
        </aside>
    </main>



<?php get_footer(); ?>