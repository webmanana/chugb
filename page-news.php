<?php
/**
 * @package WordPress
 * @subpackage lasqa
 * @since lasqa 1.0
 * Template Name: Новости
 */

get_header(); ?>
        <div class="cell medium-9">
            <section class="content_inner">
                <div class="news_inner">
                    <?php masterslider(1); ?>
                    <div class="content_title">
                        <h2><?php the_title(); ?></h2>
                    </div>
                    <div class="grid-x grid-margin-x">
                       <?php query_posts(array('paged'=>get_query_var('paged'), 'posts_per_page'=>'3' ) ); ?>
                       <?php if (have_posts()) : while (have_posts()) : the_post(); // если посты есть - запускаем цикл wp ?>
                       <?php get_template_part('info-loop'); // для отображения каждой записи берем шаблон loop.php ?>
                       <?php endwhile; // конец цикла
                       else: echo '<p>Нет записей.</p>'; endif; // если записей нет, напишим "простите" ?>
                       <!-- <div class="cell medium-12 pagination">
                          <div class="pagination_inner">
                             <ul>
                                <li><a class="active" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">...</a></li>
                                <li><a href="#">6</a></li>
                             </ul>
                          </div>
                       </div> -->
                    </div>
                </div>
           </section>
        </div>
    </div>
</div>
<?php get_footer(); ?>
