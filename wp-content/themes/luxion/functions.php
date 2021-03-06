<?php
/**
 * @package WordPress
 * @subpackage
 */

require_once 'classes/AjaxHelper.php';
AjaxHelper::init();
require_once 'classes/Filter.php';
require_once 'classes/ActionHook.php';


add_theme_support('title-tag');

add_theme_support('custom-logo', [
    'height' => 102,
    'width' => 283,
    'flex-width' => false,
    'flex-height' => false,
    'header-text' => '',
]);

register_nav_menus(array(
    'top' => 'Top',
    'bottom' => 'Bottom'
));

add_theme_support('post-thumbnails');
set_post_thumbnail_size(250, 150);
add_image_size('big-thumb', 400, 400, true);

register_sidebar(array(
    'name' => 'Sidebar',
    'id' => "sidebar",
    'description' => 'Sidebar column',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => "</div>\n",
    'before_title' => '<span class="widgettitle">',
    'after_title' => "</span>\n",
));


function beetroot_widgets_init()
{


    register_sidebar(array(
        'name' => 'Footer Sidebar 1',
        'id' => 'footer-sidebar-1',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => 'Footer Sidebar 2',
        'id' => 'footer-sidebar-2',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => 'Footer Sidebar 3',
        'id' => 'footer-sidebar-3',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}

add_action('widgets_init', 'beetroot_widgets_init');




if (!function_exists('pagination')) {
    function pagination()
    {
        global $wp_query;
        $big = 999999999;
        $links = paginate_links(array(
            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format' => '?paged=%#%',
            'current' => max(1, get_query_var('paged')),
            'type' => 'array',
            'prev_text' => 'Back',
            'next_text' => 'Forward',
            'total' => $wp_query->max_num_pages,
            'show_all' => false,
            'end_size' => 15,
            'mid_size' => 15,
            'add_args' => false,
            'add_fragment' => '',
            'before_page_number' => '',
            'after_page_number' => ''
        ));
        if (is_array($links)) {
            echo '<ul class="pagination">';
            foreach ($links as $link) {
                if (strpos($link, 'current') !== false) echo "<li class='active'>$link</li>";
                else echo "<li>$link</li>";
            }
            echo '</ul>';
        }
    }
}

add_action('wp_footer', 'add_scripts');
if (!function_exists('add_scripts')) {
    function add_scripts()
    {
        if (is_admin()) return false;
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', '', '', true);
        wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', '', '', true);
        wp_localize_script('main', 'MyAjax', array('ajaxurl' => admin_url('admin-ajax.php')));

    }
}

add_action('wp_print_styles', 'add_styles');
if (!function_exists('add_styles')) {
    function add_styles()
    {
        if (is_admin()) return false;
        wp_enqueue_style('load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
        wp_enqueue_style('main-css', get_template_directory_uri() . '/css/main.css');
        wp_enqueue_style('main', get_template_directory_uri() . '/style.css');
    }
}

if (!class_exists('bootstrap_menu')) {
    class bootstrap_menu extends Walker_Nav_Menu
    {
        private $open_submenu_on_hover;

        function __construct($open_submenu_on_hover = true)
        {
            $this->open_submenu_on_hover = $open_submenu_on_hover;
        }

        function start_lvl(&$output, $depth = 0, $args = array())
        {
            $output .= "\n<ul class=\"dropdown-menu\">\n";
        }

        function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
        {
            $item_html = '';
            parent::start_el($item_html, $item, $depth, $args);
            if ($item->is_dropdown && $depth === 0) {
                if (!$this->open_submenu_on_hover) $item_html = str_replace('<a', '<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"', $item_html);
                $item_html = str_replace('</a>', ' <b class="caret"></b></a>', $item_html);
            }
            $output .= $item_html;
        }

        function display_element($element, &$children_elements, $max_depth, $depth = 0, $args, &$output)
        {
            if ($element->current) $element->classes[] = 'active';
            $element->is_dropdown = !empty($children_elements[$element->ID]);
            if ($element->is_dropdown) {
                if ($depth === 0) {
                    $element->classes[] = 'dropdown';
                    if ($this->open_submenu_on_hover) $element->classes[] = 'show-on-hover';
                } elseif ($depth === 1) {
                    $element->classes[] = 'dropdown-submenu';
                }
            }
            parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
        }
    }
}

if (!function_exists('content_class_by_sidebar')) {
    function content_class_by_sidebar()
    {
        if (is_active_sidebar('sidebar')) {
            echo 'col-sm-9';
        } else {
            echo 'col-sm-12';
        }
    }
}

if (function_exists('acf_add_options_page')) {

    acf_add_options_page(
        array(
        'page_title' => 'Archive Jobs',
        'menu_title' => 'Archive Jobs Settings',
        'menu_slug' => 'archive-jobs',
        'capability' => 'edit_posts',
        'parent_slug' => 'edit.php?post_type=jobs',
        'redirect' => false
        )
    );

    acf_add_options_page(
        array(
            'page_title' => 'Single Job',
            'menu_title' => 'Single Job Settings',
            'menu_slug' => 'single-job',
            'capability' => 'edit_posts',
            'parent_slug' => 'edit.php?post_type=jobs',
            'redirect' => false
        )
    );

    acf_add_options_page(
        array(
            'page_title' => 'Theme Options',
            'menu_title' => 'Theme Options',
            'menu_slug' => 'theme-options',
            'capability' => 'edit_posts',
            'redirect' => false
        )
    );


}


add_post_type_support('jobs', 'excerpt');
