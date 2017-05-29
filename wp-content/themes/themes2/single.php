<?php get_header(); ?>


<div class="main_content">
    <div class="container">

        <div class="col-lg-8 col-md-8">
            <div class="row">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <div class="blog_content">
                        <div class="box_blog">
                            <h2 class="post_title">
                                <a href="#">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            <div class="post_meta">
                                <ul>
                                    <li><?php the_category(); ?></li>
                                    <li><?php the_time('j M Y'); ?></li>
                                    <li>
                                        <a href="#respond">
                                            <i class="fa fa-comment"></i>
                                            <?php comments_number('0', '1', '%') ?>
                                        </a>
                                    </li>
                                </ul>

                                <div class="miniature"><a href="#">
                                        <?php the_post_thumbnail(); ?>
                                    </a></div>

                                <?php the_content('Далее'); ?>

                                <div class="post_tags">
                                    <?php the_tags('<span>Метки: </span>', ''); ?>
                                </div>

                                <div class="social_button">
                                    <h3>Поделитесь с друзьями этим материалом в социальных сетях:</h3>
                                    <p>
                                        <script type="text/javascript">(function () {
                                                if (window.pluso)if (typeof window.pluso.start == "function") return;
                                                if (window.ifpluso == undefined) {
                                                    window.ifpluso = 1;
                                                    var d = document, s = d.createElement('script'),
                                                        g = 'getElementsByTagName';
                                                    s.type = 'text/javascript';
                                                    s.charset = 'UTF-8';
                                                    s.async = true;
                                                    s.src = ('https:' == window.location.protocol ? 'https' : 'http') + '://share.pluso.ru/pluso-like.js';
                                                    var h = d[g]('body')[0];
                                                    h.appendChild(s);
                                                }
                                            })();</script>
                                    <div class="pluso" data-background="none;"
                                         data-options="medium,square,line,horizontal,nocounter,sepcounter=1,theme=14"
                                         data-services="vkontakte,odnoklassniki,facebook,twitter,google,moimir,email,print"></div>
                                    </p>
                                </div>

                                <div class="zapisi_predsled">
                                    <div class="nav_previous">
                                        <?php if (get_adjacent_post(false, '', true)) {
                                            echo '<span>Предыдущая запись</span>';
                                            previous_post_link('<p>%link</p>');
                                        } else {
                                            $first = new WP_Query('posts_per_page=1&order=DESC');
                                            $first->the_post();
                                            echo '<span>Последняя запись</span>';
                                            echo '<p><a href="' . get_permalink() . '">' . get_the_title() . '</a></p>';
                                            wp_reset_postdata();
                                        }; ?>
                                    </div>

                                    <div class="nav_next">
                                        <?php if (get_adjacent_post(false, '', false)) {
                                            echo '<span>Следующая запись</span>';
                                            next_post_link('<p>%link</p>');
                                        } else {
                                            $last = new WP_Query('posts_per_page=1&order=ASC');
                                            $last->the_post();
                                            echo '<span>Первая запись</span>';
                                            echo '<p><a href="' . get_permalink() . '">' . get_the_title() . '</a></p>';
                                            wp_reset_postdata();
                                        }; ?>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
                <?php endif; ?>

            </div>
        </div>

        <?php get_sidebar(); ?>

        <div class="col-lg-8 col-md-8">
            <div class="row">
                <div class="pagination">
                    <?php wp_pagenavi(); ?>
                </div>
            </div>
        </div>


    </div>

    <div class="container">
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <div class="row">
                <div class="uslugy">
                    <img src="http://lorempixel.com/200/200" height="200" width="200" alt="logo">
                    <div class="uslugy_wrapper">
                        <h3>Нужен гид? Aliquam volutpat nisl eu dolor porta, eu suscipit ex bibendum.</h3>
                        <p>
                            Duis bibendum quam sapien, ut hendrerit nulla commodo sed. Fusce ornare ex
                            vulputate,
                            molestie ante sed, dignissim sem. Nunc placerat tortor ac diam elementum
                            ullamcorper.
                            Cras sit amet lorem varius, consectetur nunc in, tempor orci. Integer interdum felis
                            quis dapibus tristique.
                        </p>
                        <ul class="contact_uslugy">
                            <li><a href="#">Все услуги</a></li>
                            <li>Телефон +75550000011</li>
                            <li>Почта: <a href="mailto:mountain@mountain.ru">
                                    mountain@yandex.ru</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="container">
    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
        <div class="row">
            <?php comments_template(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
<?php wp_footer(); ?>
