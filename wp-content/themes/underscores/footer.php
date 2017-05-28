<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Underscores
 */

?>

	</div><!-- #content -->

<footer id="colophon" class="footer_my site-footer" role="contentinfo">
    <div class="container">
        <div class="col-lg-12 col-md-12">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="">
                        <div class="contacts_footer">
                            <h4>Контакты</h4>
                            <p>Praesent a venenatis ex, vitae vulputate turpis. Donec aliquam rhoncus consectetur.
                                Quisque id nibh eget turpis ullamcorper sagittis.</p>
                            <a href="#">Написать нам</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="">
                        <div class="social_footer">
                            <h4>Мы в социальных сетях</h4>
                            <div class="soc_footer_box">
                                <a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="">
                        <div class="pomosh_footer">
                            <h4>Помощь проекту</h4>
                            <p>Ut dapibus ante ac felis vestibulum, ac interdum mauris vulputate. In quis volutpat
                                turpis, in eleifend ipsum.
                            </p>
                            <span>Webmoney WMZ: Z377909229847</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12">
            <div class="copyright">
                <div class="container">
                    <div class="copy_box">
                        @ Copyright 2017. Все права защищены. Praesent a venenatis ex, vitae vulputate turpis. Donec
                        aliquam rhoncus consectetur.
                    </div>
                    <div class="copy_box site-info">
                        <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'underscores' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'underscores' ), 'WordPress' ); ?></a>
                        <span class="sep"> | </span>
                        <?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'underscores' ), 'underscores', '<a href="https://automattic.com/" rel="designer">Underscores.me</a>' ); ?>
                    </div><!-- .site-info -->
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="up_button">
    <a href="#up" >
        <img src="img.up.png" alt="/\">
    </a>
</div>

</div><!-- #page -->

<?php wp_footer(); ?>


</body>
</html>
