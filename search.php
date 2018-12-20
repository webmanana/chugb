<?php
/**
 * @package WordPress
 * @subpackage lasqa
 * @since lasqa 1.0
 */

get_header(); ?>
<div class="news_content">
   <div class="grid-container">
      <div class="grid-x grid-margin-x">
         <div class="cell medium-12 section_title">
            <h2><?php printf('Поиск: %s', get_search_query()); // заголовок поиска ?></h2>
         </div>
			<div class="cell medium-12">
				<?php if (have_posts()) : while (have_posts()) : the_post(); // если посты есть - запускаем цикл wp ?>
				<?php get_template_part('loop'); // для отображения каждой записи берем шаблон loop.php ?>
				<?php endwhile; // конец цикла
				else: echo '<p>Нет записей.</p>'; endif; // если записей нет, напишим "простите" ?>
			</div>
      </div>
   </div>
</div>
<?php get_footer(); ?>
