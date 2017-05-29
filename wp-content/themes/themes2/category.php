<?php get_header(); ?>


<div class="main_content">
    <div class="container">

        <div class="col-lg-8 col-md-8">

            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="row">
                        <div class="category_page">
                            <h2>
                                <i class="fa fa-folder-open"></i>
                                Категория:
                                <span>
                                    <?php single_cat_title('') ;?>
                                </span>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>

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
                                            <?php comments_number('0', '1', '%') ?>
                                        </a>
                                    </li>
                                </ul>

                                <div class="miniature"><a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail(); ?>
                                    </a></div>

                                <?php the_content('Далее'); ?>

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
</div>

<?php get_footer(); ?>
<?php wp_footer(); ?>
