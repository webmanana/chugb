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
                    <h2>ВСЕ ОТДЕЛЕНИЯ БОЛЬНИЦЫ:</h2>
                </div>
                <div class="otdelenia">
                    <div class="otdelenia_inner">
                        <div class="otdelenia_block">
                            <div class="otdelenia_img">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/d1.png" alt="">
                            </div>
                            <div class="otdelenia_desc">
                                <h5>Больничный комплекс</h5>
                                <span>Тел: (41147) 7-16-09, (41147) 7-14-55, (41147) 7-16-36</span>
                            </div>
                            <a href="/bolnichnyj-kompleks/"></a>
                        </div>
                    </div>
                    <div class="otdelenia_inner">
                        <div class="otdelenia_block">
                            <div class="otdelenia_img">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/children.png" alt="">
                            </div>
                            <div class="otdelenia_desc">
                                <h5>Детская поликлиника</h5>
                                <span>тел: (41147) 7-16-18</span>
                            </div>
                            <a href="/detskaja-poliklinika/"></a>
                        </div>
                    </div>
                    <div class="otdelenia_inner">
                        <div class="otdelenia_block">
                            <div class="otdelenia_img">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/doctor.png" alt="">
                            </div>
                            <div class="otdelenia_desc">
                                <h5>Поликлиника для Взрослых</h5>
                                <span>Тел: (41147) 7-14-40</span>
                            </div>
                            <a href="/poliklinika-dlja-vzroslyh/"></a>
                        </div>
                    </div>
                    <div class="otdelenia_inner">
                        <div class="otdelenia_block">
                            <div class="otdelenia_img">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/pregnancy.png" alt="">
                            </div>
                            <div class="otdelenia_desc">
                                <h5>Женская консультация</h5>
                                <span>Тел: (41147) 7-16-00</span>
                            </div>
                            <a href="/zhenskaja-konsultacija/"></a>
                        </div>
                    </div>
                    <div class="otdelenia_inner">
                        <div class="otdelenia_block">
                            <div class="otdelenia_img">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/ambulance.png" alt="">
                            </div>
                            <div class="otdelenia_desc">
                                <h5>Отделение скорой медицинской помощи</h5>
                                <span>Тел: (41147) 70003, 7-13-02</span>
                            </div>
                            <a href="/otdelenie-skoroj-medicinskoj-pomoshhi/"></a>
                        </div>
                    </div>
                    <div class="otdelenia_inner">
                        <div class="otdelenia_block">
                            <div class="otdelenia_img">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/d4.png" alt="">
                            </div>
                            <div class="otdelenia_desc">
                                <h5>Фельдшерско – акушерский пункт с. Большое Хатыми</h5>
                                <span>Тел: (44147) 20-184</span>
                            </div>
                            <a href="/feldshersko-akusherskij-punkt-selo-b-hatymi/"></a>
                        </div>
                    </div>
                </div>
                <div class="content_title">
                    <h2>НОВОСТИ И МЕРОПРИЯТИЯ</h2>
                </div>
                <div class="news_content">
                    <div class="grid-x grid-margin-x">
                        <?php query_posts(array('paged'=>get_query_var('paged'), 'posts_per_page'=>'3' ) ); ?>
        				<?php if (have_posts()) : while (have_posts()) : the_post(); // если посты есть - запускаем цикл wp ?>
        				<?php get_template_part('info-loop'); // для отображения каждой записи берем шаблон loop.php ?>
        				<?php endwhile; // конец цикла
        				else: echo '<p>Нет записей.</p>'; endif; // если записей нет, напишим "простите" ?>
                    </div>
                </div>
                <div class="content_title">
                    <h2>АДРЕС И СХЕМА ПРОЕЗДА</h2>
                </div>
                <div class="maps">
                    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A0f8d7e470f94b38163183dbcd62edeedba32e8d129552c35de273d5690ec67f5&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>
                </div>
            </div>
         </section>
        </div>
        <div class="cell medium-12">
            <div class="content_title">
                <h2>ПОЛЕЗНЫЕ ССЫЛКИ</h2>
            </div>
            <div class="banners_bottom">
                <?php if ( is_active_sidebar( 'true_side' ) ) : ?>

                    <?php dynamic_sidebar( 'true_side' ); ?>

                <?php endif; ?>
            </div>
        </div>
   </div>
</div>
<?php get_footer(); ?>
