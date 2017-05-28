<header class="top_header">
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

                    <a href="#" class="logotyp"><img src="img/logotype.png" alt="img/logotype.png"></a>
                    <button class="main_menu_button hidden-lg hidden-md"><i class="fa fa-bars"></i></button>
                    <div class="main_menu">
                        <ul>
                            <div class="search-mobile hidden-lg hidden-md">
                                <form action="" method="post" class="search">
                                    <input type="search" name="" placeholder="поиск" class="input"/>
                                    <input type="submit" name="" value="" class="submit"/>
                                </form>
                            </div>

                            <?php wp_nav_menu(array('theme_location' => 'menu-1', 'menu_id' => 'primary-menu')); ?>

                            <!--li class="active"><a href="#">Главная</a></li>
                            <li class="icon-submenu"><a href="#">Услуги</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Фрирайд</a></li>
                                    <li><a href="#">Бэккантри</a></li>
                                    <li><a href="#">Джип туры в Алматы с ночевкой</a></li>
                                    <li><a href="#">Трекинг</a></li>
                                </ul>
                            </li>
                            <li><a href="#">О нас</a></li>
                            <li><a href="#">Контакты</a></li-->
                        </ul>
                        <div class="search_header"><i class="fa fa-search"></i></div>
                    </div>


                    <!--//Мега-меню и мобайл меню//Кнопка Button к мобайл меню
                    <a href="#mobile-menu" class="toggle-mnu"><span></span></a>
                    <a href="#" class="logotyp"><img src="img/logotype.png" alt="Logo"></a>
                    <div class="main_menu">
                        <ul class="sf-menu">
                            <li class="active"><a href="#">Главная</a></li>
                            <li><a href="#">О нас</a></li>
                            <li><a href="#">Услуги</a>
                                <ul class="submenu">
                                    <li><a href="#">Фрирайд</a></li>
                                    <li><a href="#">Джимптуры</a></li>
                                    <li><a href="#">Бэккантри</a></li>
                                    <li><a href="#">Трекинг Алматы</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Контакты</a></li>
                        </ul>
                        <div class="search_header">
                            <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    -->
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