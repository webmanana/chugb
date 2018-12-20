<?php
/**
 * @package WordPress
 * @subpackage chugb
 * @since chugb 1.0
 */
 add_theme_support( 'post-thumbnails' );
 set_post_thumbnail_size( 825, 510, true );
// css
add_action('wp_print_styles', 'add_styles'); // приклеем ф-ю на добавление стилей в хедер
if (!function_exists('add_styles')) { // если ф-я уже есть в дочерней теме - нам не надо её определять
    function add_styles() { // добавление стилей
      if(is_admin()) return false; // если мы в админке - ничего не делаем
      wp_enqueue_style( 'foundation_css', get_template_directory_uri().'/vendor/foundation/css/foundation.min.css' ); // основные стили шаблона
      // wp_enqueue_style( 'slick', get_template_directory_uri().'/vendor/slick/slick.css' );
      // wp_enqueue_style( 'slick', get_template_directory_uri().'/vendor/slick/slick-theme.css' );
      wp_enqueue_style( 'main_css', get_template_directory_uri().'/style.css' ); // основные стили шаблона
  }
}

// js
add_action('wp_footer', 'add_scripts'); // приклеем ф-ю на добавление скриптов в футер
if (!function_exists('add_scripts')) { // если ф-я уже есть в дочерней теме - нам не надо её определять
 	function add_scripts() { // добавление скриптов
      if(is_admin()) return false; // если мы в админке - ничего не делаем
      wp_deregister_script('jquery'); // выключаем стандартный jquery
      wp_enqueue_script('jquery','//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js','','',true); // добавляем свой
      wp_enqueue_script('jquery2', get_template_directory_uri().'/vendor/jquery.min.js','','',true); // добавляем свой
      wp_enqueue_script('foundation_what', get_template_directory_uri().'/vendor/foundation/js/vendor/what-input.js','','',true); // и скрипты шаблона
      wp_enqueue_script('foundation_js', get_template_directory_uri().'/vendor/foundation/js/vendor/foundation.min.js','','',true); // и скрипты шаблона
      wp_enqueue_script('main_js', get_template_directory_uri().'/js/main.js','','',true); // и скрипты шаблона

 	}
}

// sidebar
function true_register_wp_sidebars() {

	/* В боковой колонке - первый сайдбар */
	register_sidebar(
		array(
			'id' => 'true_side', // уникальный id
			'name' => 'Баннеры', // название сайдбара
			'description' => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.', // описание
			'before_widget' => '<div id="%1$s" class="side widget %2$s">', // по умолчанию виджеты выводятся <li>-списком
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">', // по умолчанию заголовки виджетов в <h2>
			'after_title' => '</h3>'
		)
	);
}

add_action( 'widgets_init', 'true_register_wp_sidebars' );

// меню
register_nav_menus(array( // Регистрируем 2 меню
	'top' => 'Верхнее',
    'left' => 'Левое'
));

class left_menu extends Walker_Nav_Menu { // внутри вывод
	private $open_submenu_on_hover; // параметр который будет определять раскрывать субменю при наведении или оставить по клику как в стандартном бутстрапе
	function __construct($open_submenu_on_hover = false) { // в конструкторе
        $this->open_submenu_on_hover = $open_submenu_on_hover; // запишем параметр раскрывания субменю
    }
	function start_lvl(&$output, $depth = 0, $args = array()) { // старт вывода подменюшек
		$output .= "\n<ul class=\"menu vertical nested\">\n"; // ул с классом
	}
	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) { // старт вывода элементов
		$item_html = ''; // то что будет добавлять
		parent::start_el($item_html, $item, $depth, $args); // вызываем стандартный метод родителя
		if ( $item->is_dropdown && $depth === 0 ) { // если элемент содержит подменю и это элемент первого уровня
		   if (!$this->open_submenu_on_hover) $item_html = str_replace('<a', '<a class="left_menu_child" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"', $item_html); // если подменю не будет раскрывать при наведении надо добавить стандартные атрибуты бутстрапа для раскрытия по клику
		   $item_html = str_replace('</a>', ' </a>', $item_html); // ну это стрелочка вниз
		}
		$output .= $item_html; // приклеиваем теперь
	}
	function display_element($element, &$children_elements, $max_depth, $depth = 0, $args, &$output) { // вывод элемента
		if ( $element->current ) $element->classes[] = 'active'; // если элемент активный надо добавить бутстрап класс для подсветки
		$element->is_dropdown = !empty( $children_elements[$element->ID] ); // если у элемента подменю
		if ( $element->is_dropdown ) { // если да
		    if ( $depth === 0 ) { // если li содержит субменю 1 уровня
		        $element->classes[] = ''; // то добавим этот класс
		        if ($this->open_submenu_on_hover) $element->classes[] = 'menu_toggle'; // если нужно показывать субменю по хуверу
		    } elseif ( $depth === 1 ) { // если li содержит субменю 2 уровня
		        $element->classes[] = 'dropdown_multilevel'; // то добавим этот класс, стандартный бутстрап не поддерживает подменю больше 2 уровня по этому эту ситуацию надо будет разрешать отдельно
                if ($this->open_submenu_on_hover) $element->classes[] = 'dropdown_multilevel_toggle'; // если нужно показывать субменю по хуверу
		    }
		}
		parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output); // вызываем стандартный метод родителя
	}
}
