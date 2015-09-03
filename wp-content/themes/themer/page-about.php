<?php /* Template Name: About Page */ get_header(); ?>

    <main role="main" class="main-about">
        <!-- section -->
        <section class="col-sm-9 container">

            <h1><?php the_title(); ?></h1>

            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                <!-- article -->
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="about-content">
                        <?php the_content(); ?>

                        <br class="clear">

                        <?php edit_post_link(); ?>
                    </div>

                    <div class="row">
                        <div class="about-columns">
                            <?php

                            $key_values = get_post_custom_values( 'wpcf-column-title' );
                            foreach ( $key_values as $key => $value ) {
                                echo "<div class='col-sm-4'><b class='column-title'> $value </b></div>";
                            }

                            $mykey_values = get_post_custom_values( 'wpcf-column' );
                            foreach ( $mykey_values as $key => $value ) {
                                echo "<div class='col-sm-4'><p class='column-content'> $value </p></div>";
                            }

                            ?>
                        </div>



                    </div>

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

        <aside class="hidden-xs col-sm-3 aside-about">
            <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('about-sidebar')) ?>
        </aside>
    </main>

    </div><!-- container -->
</div><!-- wrapper -->



<?php get_footer(); ?>