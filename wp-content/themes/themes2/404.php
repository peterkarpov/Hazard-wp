<?php get_header(); ?>


<div class="main_content">
    <div class="container">

        <div class="col-lg-8 col-md-8">
            <div class="row">

                <div class="error_str">
                    <div class="container">
                        <h2>Ошибка: <span>404</span></h2>
                        <h4>Etiam nisi nunc, facilisis in eros a, sollicitudin maximus lacus.</h4>
                        <p><a href="<?php echo get_home_url(); ?>">Перейти на главную страницу</a></p>
                        <p><a href="http://wp-kama.ru">Перейти на страницу помощи</a></p>
                    </div>
                </div>

            </div>
        </div>

        <?php get_sidebar(); ?>

    </div>
</div>

<?php get_footer(); ?>
<?php wp_footer(); ?>
