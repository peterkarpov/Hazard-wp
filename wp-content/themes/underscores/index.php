<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Underscores
 */

get_header(); ?>


    <div class="main_content">
        <div class="container">

            <div class="col-lg-8 col-md-8">
                <div class="row">
                    <div class="blog_content">
                        <div class="box_blog">
                            <h2 class="post_title">
                                <a href="#">Заголовок поста</a>
                            </h2>
                            <div class="post_meta">
                                <ul>
                                    <li><a href="#">Бэккантри</a></li>
                                    <li>9 дек 2015</li>
                                    <li><a href="#"><i class="fa fa-comment"></i>10</a></li>
                                </ul>
                                <a href="#">
                                    <img class="miniature" src="http://lorempixel.com/g/800/400" alt="Miniature">
                                </a>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non faucibus sem, a
                                    ultrices odio. Aliquam erat volutpat. Class aptent taciti sociosqu ad litora
                                    torquent
                                    per conubia nostra, per inceptos himenaeos. Vestibulum pulvinar justo at nisi tempus
                                    vestibulum. Phasellus tempor luctus tellus, ut placerat libero laoreet in. Duis ac
                                    tincidunt turpis, nec placerat lorem. Maecenas vulputate augue a leo vestibulum,
                                    vitae
                                    pretium arcu viverra. Sed sodales sagittis tincidunt. Nullam egestas velit leo, vel
                                    dictum lorem blandit et. Nulla semper, libero id ultrices consectetur, enim ipsum
                                    eleifend leo, laoreet suscipit mi purus ac leo. Curabitur tristique turpis eget
                                    risus
                                    iaculis, eu placerat mauris bibendum. Aenean tristique urna nec nisi tempus
                                    sagittis.
                                    Curabitur eu lacus vel urna porttitor elementum. Quisque pretium dui erat, ut
                                    tincidunt
                                    dui tempus at. Etiam nisi nunc, facilisis in eros a, sollicitudin maximus lacus.
                                    Mauris
                                    tincidunt non risus quis molestie.
                                </p>
                                <p>
                                    Quisque elementum, quam ut <a href="#">hendrerit</a> cursus, quam libero placerat
                                    tortor, et fermentum nulla elit nec nunc. Nunc rhoncus nulla non odio hendrerit
                                    auctor.
                                    Vestibulum venenatis rutrum nulla non dapibus. Vestibulum ante ipsum primis in
                                    faucibus
                                    orci luctus et ultrices posuere cubilia Curae; Donec et molestie ante, vitae cursus
                                    lorem. Quisque laoreet a libero ac ornare. Maecenas pulvinar nisi vel justo dapibus
                                    molestie. Nullam lobortis, tortor eu lacinia mattis, justo metus malesuada lectus,
                                    eget
                                    porttitor sapien ante at diam. Vivamus dui erat, gravida eu tempor sit amet, posuere
                                    quis lorem. Nullam in neque velit. In tellus magna, faucibus et dolor eget,
                                    tincidunt
                                    rutrum augue. In justo elit, elementum ac sem et, tristique viverra arcu.
                                </p>
                                <p>
                                    Praesent a venenatis ex, vitae vulputate turpis. Donec aliquam rhoncus consectetur.
                                    Quisque id nibh eget turpis ullamcorper sagittis. Cras gravida, felis eu viverra
                                    tincidunt, ante magna molestie mauris, eget gravida turpis diam vitae nisl. Proin
                                    pharetra sapien eget eros tempus rhoncus eget quis mauris. Curabitur ultricies nulla
                                    tortor, non convallis metus lobortis imperdiet. Cras non sapien maximus, imperdiet
                                    dolor
                                    eget, condimentum mauris. In sit amet velit quis quam tristique vulputate
                                    pellentesque
                                    nec ante. Morbi vitae elit at turpis tincidunt imperdiet.
                                </p>
                                <p>
                                    Sed ac faucibus est. Donec fermentum nisi nunc, id blandit nunc elementum non.
                                    Phasellus
                                    sed consequat dui, nec imperdiet ligula. Aliquam volutpat nisl eu dolor porta, eu
                                    suscipit ex bibendum. Quisque metus tellus, auctor a risus id, malesuada laoreet
                                    dui.
                                    Duis bibendum quam sapien, ut hendrerit nulla commodo sed. Fusce ornare ex
                                    vulputate,
                                    molestie ante sed, dignissim sem. Nunc placerat tortor ac diam elementum
                                    ullamcorper.
                                    Cras sit amet lorem varius, consectetur nunc in, tempor orci. Integer interdum felis
                                    quis dapibus tristique.
                                </p>
                                <p>
                                    Ut dapibus ante ac felis vestibulum, ac interdum mauris vulputate. In quis volutpat
                                    turpis, in eleifend ipsum. Curabitur dolor ex, sodales nec sem sed, tincidunt
                                    consequat
                                    dolor. Integer quis mauris pulvinar, hendrerit tellus malesuada, pulvinar odio.
                                    Suspendisse ac posuere elit, vel elementum ante. Mauris ut auctor felis, quis
                                    tristique
                                    risus. Curabitur et porttitor sem. Mauris eget pharetra justo. Vestibulum ipsum
                                    enim,
                                    varius in tincidunt non, condimentum at purus. Proin eget dignissim purus. Donec
                                    accumsan libero non lobortis gravida.
                                </p>
                                <div class="read_more">
                                    <a href="#">Далее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="row">
                    <div class="sidebar_my">
                        <div class="sidebar_box">
                            <h3>Категории</h3>
                            <ul>
                                <li><a href="#">Горнолыжные базы</a></li>
                                <li><a href="#">Бэккантри</a></li>
                                <li><a href="#">Фрисайд</a></li>
                                <li><a href="#">Комерческие туры</a></li>
                                <li><a href="#">Трекинг</a></li>
                                <li><a href="#">Джип туры</a></li>
                                <li><a href="#">Алматинские горы</a></li>
                                <li><a href="#">Альпинизм</a></li>
                            </ul>
                            <h3>Последние записи</h3>
                            <ul>
                                <li><a href="#">Горнолыжные базы</a></li>
                                <li><a href="#">Бэккантри</a></li>
                                <li><a href="#">Фрисайд</a></li>
                                <li><a href="#">Джип туры по всему миру</a></li>
                                <li><a href="#">Трекинг Алматы</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-md-8">
                <div class="row">
                    <div class="pagination">
                        <a href="#" class="active">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="main_content">
        <div class="container">

            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">

                    <div class="col-lg-8 col-md-8">
                        <div class="row">
                            <div class="blog_content">
                                <div class="box_blog">
                                    <?php
                                    if (have_posts()) :

                                        if (is_home() && !is_front_page()) : ?>
                                            <header>
                                                <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                                            </header>

                                            <?php
                                        endif;

                                        /* Start the Loop */
                                        while (have_posts()) : the_post();

                                            /*
                                             * Include the Post-Format-specific template for the content.
                                             * If you want to override this in a child theme, then include a file
                                             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                             */
                                            get_template_part('template-parts/content', get_post_format());

                                        endwhile;

                                        the_posts_navigation();

                                    else :

                                        get_template_part('template-parts/content', 'none');

                                    endif; ?>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <div class="row">
                            <div class="sidebar_my">

                                <?php get_sidebar(); ?>

                            </div>
                        </div>
                    </div>



                </main><!-- #main -->
            </div><!-- #primary -->
        </div>
    </div>

<?php

get_footer();
