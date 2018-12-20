<?php
/**
 * @package WordPress
 * @subpackage chugb
 * @since chugb 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=1400">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<title><?php wp_title(); ?>ГБУ РС (Якутия) «Чульманская городская больница»</title>
	<!--[if lt IE]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body>
	<div class="wrap">
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="cell small-3">
					<div class="logo_inner">
						<div class="phone">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/phone.png" alt="">
								<ul>
									<li><span>+7 (41147) 71-8-35</span></li>
								</ul>
						</div>
						<div class="logo">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.png" alt="">
						</div>
						<div class="logo_text">
							<span>Государственное бюджетное учреждение</span>
							<span>Республики Саха (Якутия)</span>
							<span>«ЧУЛЬМАНСКАЯ ГОРОДСКАЯ БОЛЬНИЦА»</span>
						</div>
						<div class="top_menu">
							<div class="top_menu_link">
								<div class="top_menu_link_back"></div>
								<a href="/news/">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/a6.png" alt="">
									<span class="top_menu_link_title">Новости</span>
									<span class="top_menu_link_desc">Информация и статьи</span>
								</a>
								<a href="/contact/">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/a5.png" alt="">
									<span class="top_menu_link_title">Подать обращение</span>
									<span class="top_menu_link_desc">Обращения граждан</span>
								</a>
								<a href="http://chugb.ru/обратная-связь/">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/a5.png" alt="">
									<span class="top_menu_link_title">Обратная связь</span>
									<span class="top_menu_link_desc">Адреса и телефоны</span>
								</a>
							</div>
						</div>
					</div>
					<div class="sidebar">
						<div class="contact">
							<span><b>Адрес:</b> 678980, Республика Саха (Якутия), Нерюнгринский район, поселок Чульман, ул. Советская, 67а </span>
							<span><b>email:</b>chulman.gb@mail.ru</span>
							<span><b>Телефон горячей линии:</b> +7 (41147) 7-14-45</span>
							<span><b>Телефон приемной:</b> +7 (41147) 7-18-35</span>
							<span><b>Единый контакт-центр здравоохранения РС(Я):</b>	8(800) 100-14-03</span>
						    <span><b>Телефон горячей линии МЗ РС(Я):</b> 8 (800) 250-47-14</span>
						</div>
						<?php echo do_shortcode('[bvi text="Версия для слабовидящих"]'); ?>
						<?php wp_nav_menu( array(
	                           'theme_location'  => 'left',
	                           'container'       => false,
	                           'menu_class'      => 'menu vertical large-horizontal',
	                           'items_wrap'      => '<ul class="vertical menu accordion-menu left_menu" data-accordion-menu>%3$s</ul>',
	                           'depth'           => 0,
	                           'walker' => new left_menu
	                           )
	                       );
	                    ?>
						<ul class="vertical menu accordion-menu left_menu" data-accordion-menu>
						   <li>
						      <a class="left_menu_child" href="#">О_больнице</a>
						      <ul class="menu vertical nested">
							      <li><a href=" http://chugb.ru/otdelenija/">— Отделения</a></li>
									<li><a href="http://chugb.ru/grafik-priem-grazhdan/">— Руководство</a></li>
									<li><a href="http://chugb.ru/o-bolnice/">— Сведения о больнице</a></li>
									<li><a href="http://chugb.ru/wp-content/uploads/2018/11/список-врачей.doc">— Список врачей</a></li>
									<li><a href="http://chugb.ru/rezhim-raboty/">— Режим работы</a></li>
									<li><a href="http://chugb.ru/dannaja-stranica-nahoditsja-v-razrabotke/">— Страница главного врача</a></li>
									<li><a href="http://chugb.ru/контактная-информация/">— Контактная информация</a></li>
									<li><a href="http://chugb.ru/wp-content/uploads/2018/11/kodeks-professionalnoj-jetiki-i-sluzhebnogo-povedenija-rabotnikov-medicinskih-organizacij.pdf">— Кодекс профессиональной этики и служебного поведения работников медицинских организаций</a></li>
									<li><a href="http://chugb.ru/wp-content/uploads/2018/11/ustav-chgb.pdf">— Учредительные документы</a></li>
									<li><a href="http://chugb.ru/wp-content/uploads/2018/11/Вакансии-на-ноябрь-2018-года.doc">— Вакансии</a></li>
						      </ul>
						   </li>
						   <li>
						      <a href="#">Медицинская_деятельность</a>
						      <ul class="menu vertical nested">
							      <li><a href="http://chugb.ru/wp-content/uploads/2018/11/novye-licenzii-2016.pdf">— Лицензии</a></li>
							      <li><a href="#">— Тарифы медицинских услуг</a></li>
						      </ul>
						   </li>
							<li>
						      <a href="#">Платные_услуги</a>
						      <ul class="menu vertical nested">
							      <li><a href="http://chugb.ru/platnyh-medicinskih-uslug/">— Положениение предоставления платных медуслуг</a></li>
							      <li><a href="http://chugb.ru/perechen-okazyvaemyh-platnyh-uslug">— Перечень оказываемых платных услуг</a></li>
						      </ul>
						   </li>
							<li>
							<a href="#">Пациентам</a>
						    <ul class="menu vertical nested">
							      <li><a href=" http://chugb.ru/oms/">— ОМС</a></li>
								  <li><a href="  http://chugb.ru/lekarstvennoe-obespechenie/">— ЛЕКАРСТВЕННОЕ ОБЕСПЕЧЕНИЕ</a></li>
								<li><a href="  http://chugb.ru/o-dispanserizacii/">— О ДИСПАНСЕРИЗАЦИИ</a></li>
								<li><a href="  http://chugb.ru/pravila-dlja-pacientov/">— ПРАВИЛА ДЛЯ ПАЦИЕНТОВ</a></li>
						      </ul>
							<li><a href="http://chugb.ru/korrupcionnyh/">Противодействие_коррупции</a></li>
							<li><a href="http://chugb.ru/kontakty-kontrolirujushhih-organizacij">Контакты_контролирующих_организаций</a></li>
						</ul>
						<div class="banner">
							<a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/reg.jpg" alt=""></a>
							<a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/banner2.png" alt=""></a>
						</div>

					</div>
				</div>
