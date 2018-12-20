<?php
/**
 * @package WordPress
 * @subpackage lasqa
 * @since lasqa 1.0
 */
?>
<div class="cell medium-6 large-4 news_block">
   <div class="news_inner">
      <div class="news_img" style="background:url(<?php the_post_thumbnail_url($width, $height, $crop); ?>);"></div>
      <div class="news_desc">
         <!-- <span class="news_block_cat">Акция</span> -->
         <h3><?php the_title(); ?></h3>
         <span class="news_block_date"><?php the_time('j F, Y'); ?></span>
      </div>
      <a class="news_block_url" href="<?php the_permalink(); ?>"></a>
   </div>
</div>
