<?php
/**
 * Запись в цикле (loop.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<div class="main-news-item">
   <div class="loop_img">
      <a href="<?php the_permalink(); ?>">
         <?php the_post_thumbnail( 'large' );  ?>
      </a>
   </div>
	<div class="news-content">
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<div class="news-date"><?php the_time('j F, Y'); ?></div>
		<div class="news-excerpt"><?php the_excerpt(); ?></div>
	</div>
</div>
