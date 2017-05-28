<!DOCTYPE html>
<!--[if lt IE 7]>
<html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]>
<html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]>
<html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru">
<!--<![endif]-->
<head>
    <meta charset="windows-1251"/>
    <title><?php bloginfo('name'); ?></title>
    <meta name="description" content=""/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="favicon.png"/>


    <?php wp_head(); ?>

</head>
<body>

<a name="up"></a>

<div class="wrapper_my">

    <?php get_header(); ?>


    <div class="main_content">
        <div class="container">

            <div class="col-lg-8 col-md-8">
                <div class="row">

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <div class="blog_content">
                        <div class="box_blog">
                            <h2 class="post_title">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            <div class="post_meta">
                                <ul>
                                    <li><?php the_category(); ?></li>
                                    <li><?php the_time('j M Y'); ?></li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-comment"></i>
                                            <?php comments_number('0','1','%') ?>
                                        </a>
                                    </li>
                                </ul>

                                <div class="miniature"><a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail(); ?>
                                    </a></div>

                                <?php the_content('Далее') ;?>

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

    <?php get_footer(); ?>

    <div class="up_button">
        <a href="#up">
            <img src="img.up.png" alt="/\">
        </a>
    </div>

</div>

<?php wp_footer(); ?>


<!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
<!-- Google Analytics counter --><!-- /Google Analytics counter -->
</body>
</html>