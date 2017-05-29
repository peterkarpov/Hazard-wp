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

                            <div class="miniature"><a href="#">
                                    <?php the_post_thumbnail(); ?>
                                </a></div>

                            <?php the_content('Далее'); ?>

                            <div class="social_button">
                                <h3>Поделитесь с друзьями этим материалом в социальных сетях</h3>
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

<?php get_footer(); ?>
<?php wp_footer(); ?>
