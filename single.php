<?php
/**
 * @package WordPress
 * @subpackage chugb
 * @since chugb 1.0
 */

get_header(); ?>
        <div class="cell medium-9">
            <section class="content_inner">
                <div class="news_inner">
                    <?php masterslider(1); ?>
                    <div class="content_title">
                        <h2><?php the_title(); ?></h2>
                    </div>
                    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); // старт цикла ?>
                        <div class="single_full">
                            <?php the_content(); // контент ?>
                        </div>
                    <?php endwhile; // конец цикла ?>
                </div>
           </section>
        </div>
    </div>
</div>
<?php get_footer(); ?>
