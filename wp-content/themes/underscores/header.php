<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Underscores
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>


</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<!--a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'underscores' ); ?></a-->

    <header id="masthead"  class="top_header site-header" role="banner">
        <div class="header_topline">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="soc_button">
                            <a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </div>
                        <div class="contact_head">
                            <p><span><i class="fa fa-phone" aria-hidden="true"></i>+777005566</span></p>
                            <p><i class="fa fa-envelope-o" aria-hidden="true"></i>
                                <a href="mailto:mountain@yandex.ru">
                                    mountain@yandex.ru</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header_shapka">
            <div class="container">
                <div class="col-md-12">
                    <div class="row">

                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logotyp">
                            <img src="<?php bloginfo('template_url'); ?>/img/logotype.png" alt="img/logotype.png">
                        </a>

                        <button class="main_menu_button hidden-lg hidden-md menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-bars"></i></button>
                        <nav id="site-navigation" class="main_menu main-navigation" role="navigation">
                            <!--ul>
                                <div class="search-mobile hidden-lg hidden-md">
                                    <form action="" method="post" class="search">
                                        <input type="search" name="" placeholder="поиск" class="input"/>
                                        <input type="submit" name="" value="" class="submit"/>
                                    </form>
                                </div>
                                <li class="active"><a href="#">Главная</a>
                                <li>
                                <li class="icon-submenu"><a href="#">Услуги</a>
                                    <ul class="sub_menu">
                                        <li><a href="#">Фрирайд</a></li>
                                        <li><a href="#">Бэккантри</a></li>
                                        <li><a href="#">Джип туры в Алматы с ночевкой</a></li>
                                        <li><a href="#">Трекинг</a></li>
                                    </ul>
                                <li>
                                <li><a href="#">О нас</a>
                                <li>
                                <li><a href="#">Контакты</a>
                                <li>

                            </ul-->
                            <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
                            <div class="search_header"><i class="fa fa-search"></i></div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="close_search hidden-sm hidden-xs">x</div>
    <div class="container">
        <div class="col-lg-12">
            <div class="row">
                <div class="search_popup hidden-sm hidden-xs">
                    <form action="" method="post" class="search_vspl">
                        <input type="search" name="" placeholder="Поиск..." class="input_vspl"/>
                        <button type="submit" class="searchsubmit" name="submit" value="Search">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="opacity hidden-sm hidden-xs"></div>

	<div id="content" class="site-content">
