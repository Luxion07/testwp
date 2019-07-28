<?php
/**
 * Шаблон шапки (header.php)
 * @package WordPress
 * @subpackage
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php /* RSS и всякое */ ?>
    <link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
    <link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
    <link rel="alternate" type="application/rss+xml" title="Comments RSS"
          href="<?php bloginfo('comments_rss2_url'); ?>">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>

    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="https://kit.fontawesome.com/795892e7f7.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="main-header">
    <div class="navbar container">
        <div class="logo">
            <?php the_custom_logo($blog_id); ?>
        </div>

        <div class="select-lang">
            <a href="#" class="dropbtn">Eng
                <span class="arrow-down"></span>
            </a>
            <div class="dropdown-content">
                <a href="#">Рус</a>
                <a href="#">Укр</a>
            </div>
        </div>
        <div class="main-menu">
            <?php $args = array(
                'theme_location' => 'top',
                'container' => false,
                'menu_id' => 'top-nav-ul',
                'items_wrap' => '<ul id="%1$s" class="nav navbar-nav %2$s">%3$s</ul>',
                'menu_class' => 'top-menu',
                'walker' => new bootstrap_menu(true)
            );
            wp_nav_menu($args);
            ?>
        </div>

        <div class="mobile-btn">
            <span class="burger">
                <i class="fa fa-bars"></i>
            </span>
        </div>
    </div>

    <div class="mobile-menu">

        <?php
        wp_nav_menu($args);
        ?>
        <span class="close-menu">
            <i class="fa fa-times"></i>
        </span>
    </div>
</header>