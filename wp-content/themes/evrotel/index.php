<?php get_header(); ?>
<body id="section1">
<div class="loader">
    <div class="loader_inner"></div>
</div>
<div class="wrapper">
    <div class="header">
        <div class="header__container">
            <?php dynamic_sidebar('logo'); ?>
            <div class="header_descr">
                <h2 class="animated rollIn">Виртуальные АТС</h2>
            </div>
            <div class="provider__txt">
                <p>  Провайдер телекоммуникаций</p>
                <p>  Украины</p>
            </div>
            <div class="nav__container" id="nav__container">
                <nav class="main__menu">
                    <ul>
                        <li><a class="nav__link current" href="#section1">Евро-тел</a></li>
                        <li><a class="nav__link" href="#section2">Как это работает</a></li>
                        <li><a class="nav__link" href="#section3">Функции</a></li>
                        <li><a class="nav__link" href="#section4">GSM</a></li>
                        <li><a class="nav__link" href="#section5">Цены</a></li>
                        <li><a class="nav__link" href="#section6">Контакты</a></li>
                    </ul>
                </nav>
                <nav class="nav__mobile">
                    <div class="nav__container-mob">
                        <div class="nav__lines">
                            <p>  _</p>
                            <p>  _</p>
                            <p>  _</p>
                        </div>
                    </div>
                    <ul class="nav__dropdown">
                        <li><a class="nav__link current" href="#section1">Евро-тел</a></li>
                        <li><a class="nav__link" href="#section2">Как это работает</a></li>
                        <li><a class="nav__link" href="#section3">Функции</a></li>
                        <li><a class="nav__link" href="#section4">GSM</a></li>
                        <li><a class="nav__link" href="#section5">Цены</a></li>
                        <li><a class="nav__link" href="#section6">Контакты</a></li>
                    </ul>
                </nav>
            </div>
            <div class="header__contacts">
                <address><a href="tel:+380443211022">+38 (044) 32-11-022</a><a href="tel:+380504544043"> +38 (050) 454-40-43</a><a href="mailto:evrotel.ipats@gmail.com">   evrotel.ipats@gmail.com</a></address>
            </div>
            <div class="header__slider">
                <ul class="bxslider">
                    <li>
                        <div class="slide slide__gsm">  Дорого покупать GSM-шлюз?</div>
                    </li>
                    <li>
                        <div class="slide slide__card">   Надоело возиться с  SIM-карточками?</div>
                    </li>
                    <li>
                        <div class="slide slide__desicions">Наши решения проще и дешевле!</div>
                    </li>
                    <li>
                        <div class="slide slide__softphone">Установка программного телефона на смартфон - за несколько нажатий!</div>
                    </li>
                    <li>
                        <div class="slide slide__softphone">Звонки на мобильные по<strong> 16 коп\мин</strong></div>
                    </li>
                    <li>
                        <div class="slide slide__multinumbers">Многоканальные мобильные номера</div>
                    </li>
                </ul>
            </div>
            <div class="header__slogan">
                <p>  Лёгкий вход в "серъёзную" телефонию</p>
            </div>
        </div>
    </div>
    <article class="parallax-window" data-parallax="scroll" data-image-src="img/how_bg.jpg" id="section2">
        <a href="<?php echo get_template_directory_uri(); ?>/img/how_bg.jpg" class="beta"></a>
        <a href="<?php echo get_template_directory_uri(); ?>/js/animate-css.js" class="alfa"></a>
        <div class="how__container">
            <h2 class="article__header"> <?php echo get_cat_name(2); ?></h2>
            <div class="how__descr">

                <?php if ( have_posts() ) : query_posts('p=4');
                    while (have_posts()) : the_post(); ?>

                            <?php the_content(); ?>

                    <? endwhile; endif; wp_reset_query(); ?>

            </div>
        </div>
    </article>
    <article class="functions" id="section3">
        <h2 class="article__header"><?php echo get_cat_name(3); ?></h2>
        <div class="func__background"></div>
        <div class="func__container2">
            <ul class="table_tabs-mob1">
                <li class="func__item func__item-active" role="presentation"><a class="func__linc" href="#voice"
                                                                                aria-controls="voice" role="tab"
                                                                                data-toggle="tab"><?php echo get_the_title($post = 8) ?></a>
                </li>
                <li class="func__item" role="presentation"><a class="func__linc" href="#stat" aria-controls="stat"
                                                              role="tab"
                                                              data-toggle="tab"><?php echo get_the_title($post = 10) ?></a>
                </li>
                <li class="func__item" role="presentation"><a class="func__linc" href="#callback"
                                                              aria-controls="callback" role="tab"
                                                              data-toggle="tab"><?php echo get_the_title($post = 12) ?></a>
                </li>
                <li class="func__item" role="presentation"><a class="func__linc" href="#incom" aria-controls="incom"
                                                              role="tab"
                                                              data-toggle="tab"><?php echo get_the_title($post = 14) ?></a>
                </li>
                <li class="func__item" role="presentation"><a class="func__linc" href="#queue" aria-controls="queue"
                                                              role="tab"
                                                              data-toggle="tab"><?php echo get_the_title($post = 16) ?></a>
                </li>
                <li class="func__item" role="presentation"><a class="func__linc" href="#return" aria-controls="return"
                                                              role="tab"
                                                              data-toggle="tab"><?php echo get_the_title($post = 23) ?></a>
                </li>
                <li class="func__item" role="presentation"><a class="func__linc" href="#fax" aria-controls="fax"
                                                              role="tab"
                                                              data-toggle="tab"><?php echo get_the_title($post = 19) ?></a>
                </li>
                <li class="func__item" role="presentation"><a class="func__linc func__linc" href="#crm"
                                                              aria-controls="crm" role="tab"
                                                              data-toggle="tab"><?php echo get_the_title($post = 21) ?></a>
                </li>
            </ul>
            <div class="tab-content tab-content1">
                <div class="tab-pane func__descr fade in active" role="tabpanel" id="voice">
                    <h3 class="func__descr-title"><?php echo get_the_title($post = 8) ?></h3>

                    <p>  <?php if (have_posts()) : query_posts('p=8');
                            while (have_posts()) : the_post(); ?>
                                <?php the_content(); ?>
                            <? endwhile; endif;
                        wp_reset_query(); ?></p>
                </div>
                <div class="tab-pane fade func__descr" role="tabpanel" id="stat">
                    <h3 class="func__descr-title"><?php echo get_the_title($post = 10) ?></h3>

                    <p><?php if (have_posts()) : query_posts('p=10');
                            while (have_posts()) : the_post(); ?>
                                <?php the_content(); ?>
                            <? endwhile; endif;
                        wp_reset_query(); ?></p>
                </div>
                <div class="tab-pane fade func__descr" role="tabpanel" id="callback">
                    <h3 class="func__descr-title"><?php echo get_the_title($post = 12) ?></h3>

                    <p><?php if (have_posts()) : query_posts('p=12');
                            while (have_posts()) : the_post(); ?>
                                <?php the_content(); ?>
                            <? endwhile; endif;
                        wp_reset_query(); ?></p>
                </div>
                <div class="tab-pane fade func__descr" role="tabpanel" id="incom">
                    <h3 class="func__descr-title"><?php echo get_the_title($post = 14) ?></h3>

                    <p><?php if (have_posts()) : query_posts('p=14');
                            while (have_posts()) : the_post(); ?>
                                <?php the_content(); ?>
                            <? endwhile; endif;
                        wp_reset_query(); ?></p>
                </div>
                <div class="tab-pane fade func__descr" role="tabpanel" id="queue">
                    <h3 class="func__descr-title"><?php echo get_the_title($post = 16) ?></h3>

                    <p><?php if (have_posts()) : query_posts('p=16');
                            while (have_posts()) : the_post(); ?>
                                <?php the_content(); ?>
                            <? endwhile; endif;
                        wp_reset_query(); ?></p>
                </div>
                <div class="tab-pane fade func__descr" role="tabpanel" id="return">
                    <h3 class="func__descr-title"><?php echo get_the_title($post = 23) ?></h3>

                    <p><?php if (have_posts()) : query_posts('p=23');
                            while (have_posts()) : the_post(); ?>
                                <?php the_content(); ?>
                            <? endwhile; endif;
                        wp_reset_query(); ?></p>
                </div>
                <div class="tab-pane fade func__descr" role="tabpanel" id="fax">
                    <h3 class="func__descr-title"><?php echo get_the_title($post = 19) ?></h3>

                    <p><?php if (have_posts()) : query_posts('p=19');
                            while (have_posts()) : the_post(); ?>
                                <?php the_content(); ?>
                            <? endwhile; endif;
                        wp_reset_query(); ?></p>
                </div>
                <div class="tab-pane fade func__descr" role="tabpanel" id="crm">
                    <h3 class="func__descr-title"><?php echo get_the_title($post = 21) ?></h3>

                    <p><?php if (have_posts()) : query_posts('p=21');
                            while (have_posts()) : the_post(); ?>
                                <?php the_content(); ?>
                            <? endwhile; endif;
                        wp_reset_query(); ?></p>
                </div>
            </div>
        </div>
    </article>
    <article class="gsm" id="section4">
        <h2 class="article__header">GSM звонки</h2>
        <div class="gsm__container">
            <div class="gsm__intro">
                <p>  Для приёма многоканальных звонков с мобильных номеров и совершения звонков на мобильные номера Украины в наших АТС используются каналы IP-телефонии (один канал используется для одного разговора).</p>
            </div>
            <div class="gsm__universal">
                <h3 class="gsm__title"> <?php echo get_cat_name(7); ?></h3>
                <div class="gsm__descr">
                    <?php if (have_posts()) : query_posts('p=28');
                        while (have_posts()) : the_post(); ?>
                            <?php the_content(); ?>
                        <? endwhile; endif;
                    wp_reset_query(); ?>
                </div>
            </div>
            <div class="gsm__incoming">
                <h3 class="gsm__title"> <?php echo get_cat_name(8); ?></h3>
                <div class="gsm__descr">
                    <?php if (have_posts()) : query_posts('p=30');
                        while (have_posts()) : the_post(); ?>
                            <?php the_content(); ?>
                        <? endwhile; endif;
                    wp_reset_query(); ?>
                </div>
            </div>
            <div class="gsm__numbers">
                <h3 class="gsm__title">  <?php echo get_cat_name(9); ?></h3>
                <p>  Если Вам нужен фиксированный мобильный номер для получения многоканальных входящих звонков на каналы IP-телефонии, Вы можете подключить к ним номера украинских операторов. Расценки на обслуживание номеров:</p>
                <div class="numbers_container">

                    <?php if (have_posts()) : query_posts('cat=' . '4');
                        while (have_posts()) : the_post(); ?>
                            <div class="descr__oper">
                                <?php the_post_thumbnail(array(50, 50)); ?>
                                <strong><?php the_content(); ?></strong>
                            </div>
                        <? endwhile; endif;
                    wp_reset_query(); ?>


                </div>
                <p><em> * Особенность номеров Lifecell: по условиям оператора стоимость каждого факта входящего звонка в каналах IP-телефонии составляет 22 коп. Оплата за звонки текущего месяца учитывается в счёте следующего месяца.</em></p>
            </div>
        </div>
    </article>
    <article class="price" id="section5">
        <h2 class="article__header"><?php echo get_cat_name(5); ?></h2>
        <h3 class="price__descr">Пакеты АТС</h3>
        <div class="table-responsive table__big">
            <table class="table table__price">
                <thead>
                <tr>
                    <th class="first__col"> Название пакета</th>
                    <th class="second__col"> Free</th>
                    <th class="third__col"> Начальная</th>
                    <th class="fourth__col"> Бизнес</th>
                    <th class="fifth__col"> Гранд</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">Внутренние номера</th>
                    <td> 1</td>
                    <td> 5</td>
                    <td> 10</td>
                    <td> Не ограничено</td>
                </tr>
                <tr>
                    <th scope="row">Внешние номера</th>
                    <td> 1</td>
                    <td> До 3-х</td>
                    <td> До 6-ти</td>
                    <td> Не ограничено</td>
                </tr>
                <tr>
                    <th scope="row">Входящие каналы</th>
                    <td> 1</td>
                    <td> До 3-х</td>
                    <td> До 6-ти</td>
                    <td> Не ограничено</td>
                </tr>
                <tr>
                    <th scope="row">Исходящие каналы</th>
                    <td><i class="fa fa-times" aria-hidden="true"></i></td>
                    <td> До 3-х</td>
                    <td> До 6-ти</td>
                    <td> Не ограничено</td>
                </tr>
                <tr>
                    <th scope="row">Бесплатные звонки на 044</th>
                    <td><i class="fa fa-times" aria-hidden="true"></i></td>
                    <td><i class="fa fa-check-square-o" aria-hidden="true"></i></td>
                    <td><i class="fa fa-check-square-o" aria-hidden="true"></i></td>
                    <td><i class="fa fa-check-square-o" aria-hidden="true"></i></td>
                </tr>
                <tr>
                    <th scope="row">Статистика звонков</th>
                    <td><i class="fa fa-times" aria-hidden="true"></i></td>
                    <td><i class="fa fa-check-square-o" aria-hidden="true"></i></td>
                    <td><i class="fa fa-check-square-o" aria-hidden="true"></i></td>
                    <td><i class="fa fa-check-square-o" aria-hidden="true"></i></td>
                </tr>
                <tr>
                    <th scope="row">Аудиозапись всех разговоров</th>
                    <td><i class="fa fa-times" aria-hidden="true"></i></td>
                    <td><i class="fa fa-check-square-o" aria-hidden="true"></i></td>
                    <td><i class="fa fa-check-square-o" aria-hidden="true"></i></td>
                    <td><i class="fa fa-check-square-o" aria-hidden="true"></i></td>
                </tr>
                <tr>
                    <th scope="row">Переадресация звонков</th>
                    <td><i class="fa fa-times" aria-hidden="true"></i></td>
                    <td><i class="fa fa-times" aria-hidden="true"></i></td>
                    <td><i class="fa fa-times" aria-hidden="true"></i></td>
                    <td><i class="fa fa-check-square-o" aria-hidden="true"></i></td>
                </tr>
                <tr>
                    <th scope="row">Интерактивное голосовое меню (IVR)</th>
                    <td><i class="fa fa-times" aria-hidden="true"></i></td>
                    <td><i class="fa fa-times" aria-hidden="true"></i></td>
                    <td><i class="fa fa-check-square-o" aria-hidden="true"></i></td>
                    <td><i class="fa fa-check-square-o" aria-hidden="true"></i></td>
                </tr>
                <tr>
                    <th scope="row">Интеграция с Битрикс24</th>
                    <td><i class="fa fa-check-square-o" aria-hidden="true"></i></td>
                    <td><i class="fa fa-check-square-o" aria-hidden="true"></i></td>
                    <td><i class="fa fa-check-square-o" aria-hidden="true"></i></td>
                    <td><i class="fa fa-check-square-o" aria-hidden="true"></i></td>
                </tr>
                <tr>
                    <th scope="row">Привязка "Клиент-Сотрудник"</th>
                    <td><i class="fa fa-times" aria-hidden="true"></i></td>
                    <td><i class="fa fa-check-square-o" aria-hidden="true"></i></td>
                    <td><i class="fa fa-check-square-o" aria-hidden="true"></i></td>
                    <td><i class="fa fa-check-square-o" aria-hidden="true"></i></td>
                </tr>
                <tr>
                    <th scope="row">Call Me - виджет звонка c сайта</th>
                    <td><i class="fa fa-check-square-o" aria-hidden="true"></i></td>
                    <td><i class="fa fa-check-square-o" aria-hidden="true"></i></td>
                    <td><i class="fa fa-check-square-o" aria-hidden="true"></i></td>
                    <td><i class="fa fa-check-square-o" aria-hidden="true"></i></td>
                </tr>
                <tr class="tr__price">
                    <th scope="row">Ежемесячно</th>
                    <td> 0 грн.</td>
                    <td> 99 грн.</td>
                    <td> 150 грн.</td>
                    <td> 199 грн.</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="price__mob table__small">
            <ul class="nav nav-tabs table_tabs-mob">
                <li class="active" role="presentation"><a href="#free" aria-controls="free" role="tab" data-toggle="tab">  Free</a></li>
                <li role="presentation"><a href="#neofit" aria-controls="neofit" role="tab" data-toggle="tab">  Начальная</a></li>
                <li role="presentation"><a href="#business" aria-controls="business" role="tab" data-toggle="tab">  Бизнес</a></li>
                <li role="presentation"><a href="#grand" aria-controls="grand" role="tab" data-toggle="tab">  Гранд</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade in active" role="tabpanel" id="free">
                    <div class="table-responsive">
                        <table class="table table__price table_price-mob">
                            <thead>
                            <tr>
                                <th class="first__col-mob"> Внутренние номера</th>
                                <th class="second__col-mob"> 1</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">Внешние номера</th>
                                <td> 1</td>
                            </tr>
                            <tr>
                                <th scope="row">Входящие каналы</th>
                                <td> 1</td>
                            </tr>
                            <tr>
                                <th scope="row">Исходящие каналы</th>
                                <td><i class="fa fa-times" aria-hidden="true"></i></td>
                            </tr>
                            <tr>
                                <th scope="row">Бесплатные звонки на 044</th>
                                <td><i class="fa fa-times" aria-hidden="true"></i></td>
                            </tr>
                            <tr>
                                <th scope="row">Статистика звонков</th>
                                <td><i class="fa fa-times" aria-hidden="true"></i></td>
                            </tr>
                            <tr>
                                <th scope="row">Аудиозапись всех разговоров</th>
                                <td><i class="fa fa-times" aria-hidden="true"></i></td>
                            </tr>
                            <tr>
                                <th scope="row">Переадресация звонков</th>
                                <td><i class="fa fa-times" aria-hidden="true"></i></td>
                            </tr>
                            <tr>
                                <th scope="row">Интерактивное голосовое меню (IVR)</th>
                                <td><i class="fa fa-times" aria-hidden="true"></i></td>
                            </tr>
                            <tr>
                                <th scope="row">Интеграция с Битрикс24</th>
                                <td><i class="fa fa-check-square-o" aria-hidden="true"></i></td>
                            </tr>
                            <tr>
                                <th scope="row">Привязка "Клиент-Сотрудник"</th>
                                <td><i class="fa fa-times" aria-hidden="true"></i></td>
                            </tr>
                            <tr>
                                <th scope="row">Call Me - виджет звонка c сайта</th>
                                <td><i class="fa fa-check-square-o" aria-hidden="true"></i></td>
                            </tr>
                            <tr class="tr__price">
                                <th scope="row">Ежемесячно</th>
                                <td> 0 грн.</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" role="tabpanel" id="neofit">
                    <div class="table-responsive">
                        <table class="table table__price table_price-mob">
                            <thead>
                            <tr>
                                <th class="first__col-mob"> Внутренние номера</th>
                                <th class="second__col-mob"> 5</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">Внешние номера</th>
                                <td> До 3-х</td>
                            </tr>
                            <tr>
                                <th scope="row">Входящие каналы</th>
                                <td> До 3-х</td>
                            </tr>
                            <tr>
                                <th scope="row">Исходящие каналы</th>
                                <td> До 3-х</td>
                            </tr>
                            <tr>
                                <th scope="row">Бесплатные звонки на 044</th>
                                <td><i class="fa fa-check-square-o" aria-hidden="true"></i></td>
                            </tr>
                            <tr>
                                <th scope="row">Статистика звонков</th>
                                <td><i class="fa fa-check-square-o" aria-hidden="true"></i></td>
                            </tr>
                            <tr>
                                <th scope="row">Аудиозапись всех разговоров</th>
                                <td><i class="fa fa-check-square-o" aria-hidden="true"></i></td>
                            </tr>
                            <tr>
                                <th scope="row">Переадресация звонков</th>
                                <td><i class="fa fa-times" aria-hidden="true"></i></td>
                            </tr>
                            <tr>
                                <th scope="row">Интерактивное голосовое меню (IVR)</th>
                                <td><i class="fa fa-times" aria-hidden="true"></i></td>
                            </tr>
                            <tr>
                                <th scope="row">Интеграция с Битрикс24</th>
                                <td><i class="fa fa-check-square-o" aria-hidden="true"></i></td>
                            </tr>
                            <tr>
                                <th scope="row">Привязка "Клиент-Сотрудник"</th>
                                <td><i class="fa fa-check-square-o" aria-hidden="true"></i></td>
                            </tr>
                            <tr>
                                <th scope="row">Call Me - виджет звонка c сайта</th>
                                <td><i class="fa fa-check-square-o" aria-hidden="true"></i></td>
                            </tr>
                            <tr class="tr__price">
                                <th scope="row">Ежемесячно</th>
                                <td> 99 грн.</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" role="tabpanel" id="business">
                    <div class="table-responsive">
                        <table class="table table__price table_price-mob">
                            <thead>
                            <tr>
                                <th class="first__col-mob"> Внутренние номера</th>
                                <th class="second__col-mob"> 10</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">Внешние номера</th>
                                <td> До 6-ти</td>
                            </tr>
                            <tr>
                                <th scope="row">Входящие каналы</th>
                                <td> До 6-ти</td>
                            </tr>
                            <tr>
                                <th scope="row">Исходящие каналы</th>
                                <td> До 6-ти</td>
                            </tr>
                            <tr>
                                <th scope="row">Бесплатные звонки на 044</th>
                                <td><i class="fa fa-check-square-o" aria-hidden="true"></i></td>
                            </tr>
                            <tr>
                                <th scope="row">Статистика звонков</th>
                                <td><i class="fa fa-check-square-o" aria-hidden="true"></i></td>
                            </tr>
                            <tr>
                                <th scope="row">Аудиозапись всех разговоров</th>
                                <td><i class="fa fa-check-square-o" aria-hidden="true"></i></td>
                            </tr>
                            <tr>
                                <th scope="row">Переадресация звонков</th>
                                <td><i class="fa fa-times" aria-hidden="true"></i></td>
                            </tr>
                            <tr>
                                <th scope="row">Интерактивное голосовое меню (IVR)</th>
                                <td><i class="fa fa-check-square-o" aria-hidden="true"></i></td>
                            </tr>
                            <tr>
                                <th scope="row">Интеграция с Битрикс24</th>
                                <td><i class="fa fa-check-square-o" aria-hidden="true"></i></td>
                            </tr>
                            <tr>
                                <th scope="row">Привязка "Клиент-Сотрудник"</th>
                                <td><i class="fa fa-check-square-o" aria-hidden="true"></i></td>
                            </tr>
                            <tr>
                                <th scope="row">Call Me - виджет звонка c сайта</th>
                                <td><i class="fa fa-check-square-o" aria-hidden="true"></i></td>
                            </tr>
                            <tr class="tr__price">
                                <th scope="row">Ежемесячно</th>
                                <td> 199 грн.</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" role="tabpanel" id="grand">
                    <div class="table-responsive">
                        <table class="table table__price table_price-mob">
                            <thead>
                            <tr>
                                <th class="first__col-mob"> Внутренние номера</th>
                                <th class="second__col-mob"> Не ограничено</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">Внешние номера</th>
                                <td> Не ограничено</td>
                            </tr>
                            <tr>
                                <th scope="row">Входящие каналы</th>
                                <td> Не ограничено</td>
                            </tr>
                            <tr>
                                <th scope="row">Исходящие каналы</th>
                                <td> Не ограничено</td>
                            </tr>
                            <tr>
                                <th scope="row">Бесплатные звонки на 044</th>
                                <td><i class="fa fa-check-square-o" aria-hidden="true"></i></td>
                            </tr>
                            <tr>
                                <th scope="row">Статистика звонков</th>
                                <td><i class="fa fa-check-square-o" aria-hidden="true"></i></td>
                            </tr>
                            <tr>
                                <th scope="row">Аудиозапись всех разговоров</th>
                                <td><i class="fa fa-check-square-o" aria-hidden="true"></i></td>
                            </tr>
                            <tr>
                                <th scope="row">Переадресация звонков</th>
                                <td><i class="fa fa-check-square-o" aria-hidden="true"></i></td>
                            </tr>
                            <tr>
                                <th scope="row">Интерактивное голосовое меню (IVR)</th>
                                <td><i class="fa fa-check-square-o" aria-hidden="true"></i></td>
                            </tr>
                            <tr>
                                <th scope="row">Интеграция с Битрикс24</th>
                                <td><i class="fa fa-check-square-o" aria-hidden="true"></i></td>
                            </tr>
                            <tr>
                                <th scope="row">Привязка "Клиент-Сотрудник"</th>
                                <td><i class="fa fa-check-square-o" aria-hidden="true"></i></td>
                            </tr>
                            <tr>
                                <th scope="row">Call Me - виджет звонка c сайта</th>
                                <td><i class="fa fa-check-square-o" aria-hidden="true"></i></td>
                            </tr>
                            <tr class="tr__price">
                                <th scope="row">Ежемесячно</th>
                                <td> 199 грн.</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <h3 class="price__descr">   Дополнительные услуги</h3>
        <table class="table additional_serv-table">
            <thead>
            <tr>
                <th class="serv__col"> Название услуги</th>
                <th class="price__col"> Цена</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">Подключение к АТС SIP-транка с фиксированной телефонной связью</th>
                <td> 130 грн.</td>
            </tr>
            <tr>
                <th scope="row">Использование SIP-транка с фиксированной телефонной связью для приёма входящих звонков</th>
                <td> Бесплатно</td>
            </tr>
            <tr>
                <th scope="row">Использование SIP-транка с фиксированной телефонной связью для входящих-исходящих звонков</th>
                <td> 50 грн. в мес.</td>
            </tr>
            </tbody>
        </table>
    </article>
    <article class="contacts" id="section6">
        <h2 class="article__header"> <?php echo get_cat_name(6); ?></h2>
        <div class="contacts__container">
            <div class="contacts__content">
                <address>
                    <p class="fin">  Подключение, финансовые вопросы:</p><a href="tel:+380443211022">+38 (044) 32-11-022</a><br><a href="tel:+380504544043"> +38 (050) 454-40-43</a><br><a href="mailto:evrotel.ipats@gmail.com">   evrotel.ipats@gmail.com</a>
                    <p class="support">  Техподдержка:<br><a href="mailto:support@evro-tel.com.ua">   support@evro-tel.com.ua</a></p>
                    <p class="post">  Почтовый адрес:<br><span>   01015, г.Киев, ул. Старонаводницкая, 6/6</span></p>
                </address>
            </div>
            <div class="contacts__form">
                <h3> Оставьте Ваше сообщение:</h3>
                <form class="main_form" action="http://formspree.io/evrotel.ipats@gmail.com" novalidate target="_blank" method="post">
                    <label class="form-group"><span class="color_element"> * Ваше имя:</span>
                        <input type="text" name="name" placeholder="Имя" data-validation-required-message="Вы не ввели имя" required><span class="help-block text-danger"></span>
                    </label>
                    <label class="form-group"><span class="color_element">* Ваш E-mail:</span>
                        <input type="email" name="email" placeholder="E-mail" data-validation-required-message="Не корректно введен E-mail" required><span class="help-block text-danger"></span>
                    </label>
                    <label class="form-group"><span class="color_element">* Ваше сообщение:</span>
                        <textarea name="message" placeholder="Сообщение" data-validation-required-message="Вы не ввели сообщение" required></textarea><span class="help-block text-danger"></span>
                    </label>
                    <button> Отправить</button>
                </form>
            </div>
        </div>
    </article>
</div>
<?php get_footer(); ?>