<?php /* Template Name: About Page */ get_header(); ?>

    <main role="main" class="main-about">
        <!-- section -->
        <section class="col-sm-9">

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

                        <?php

                        //this function is used to add the .column-content class to the p tag
                        function first_paragraph($content){
                            return preg_replace('/<p([^>]+)?>/', '<p$1 class="column-content">', $content, 1);
                        }
                        add_filter('the_content', 'first_paragraph');


                        $args = array( 'post_type' => 'about-column');
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post(); ?>

                            <div class="col-sm-4">
                                <b class="column-title">
                                <?php the_title(); ?>
                                </b>
                                <?php the_content(); ?>
                            </div>

                        <?php endwhile; ?>


                    </div>

                </article> <!-- /article -->

            <?php endwhile; ?>

            <?php else: ?>

                <!-- article -->
                <article>

                    <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                </article> <!-- /article -->

            <?php endif; ?>

        </section> <!-- /section -->

        <aside class="hidden-xs col-sm-3 aside-about">
            <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('about-sidebar')) ?>
        </aside>
    </main>

    </div><!-- container -->
</div><!-- wrapper -->



<?php get_footer(); ?>