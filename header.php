<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<? $CurrentH = date(H, time()); ?>
<!DOCTYPE html>
<html lang="ru">
<? IncludeTemplateLangFile(__FILE__); ?>
<head>
    <title><? $APPLICATION->ShowTitle() ?></title>
    <?
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/reset.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/style.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/owl.carousel.css");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery.min.js');
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/scripts.js');
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/owl.carousel.min.js');
    ?>
    <link rel="icon" type="image/vnd.microsoft.icon" href="<?= SITE_TEMPLATE_PATH ?>/img/favicon.ico">
    <link rel="shortcut icon" href="<?= SITE_TEMPLATE_PATH ?>/img/favicon.ico">
    <? $APPLICATION->ShowHead(); ?>
</head>
<body>
<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
<!-- wrap -->
<div class="wrap">
    <!-- header -->
    <header class="header">
        <div class="inner-wrap">
            <div class="logo-block"><a href="" class="logo">Мебельный магазин</a>
            </div>
            <div class="main-phone-block">
                <a href="tel:84952128506" class="phone">8 (495) 212-85-06</a>
                <? if ($CurrentH >= 9 and $CurrentH <= 18): ?>
                    <div class="shedule">время работы с 9-00 до 18-00</div>
                <? else: ?>
                    <a href="mailto:store@store.ru" class="phone">store@store.ru</a>
                    <div class="shedule">время работы с 9-00 до 18-00</div>
                <? endif; ?>
            </div>
            <div class="actions-block">
                <form action="/" class="main-frm-search">
                    <input type="text" placeholder="Поиск">
                    <button type="submit"></button>
                </form>
                <?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form", 
	"demo", 
	array(
		"FORGOT_PASSWORD_URL" => "?forgot_password=yes",
		"PROFILE_URL" => "/login/user.php",
		"REGISTER_URL" => "?register=yes",
		"SHOW_ERRORS" => "N",
		"COMPONENT_TEMPLATE" => "demo"
	),
	false
);?>

            </div>
        </div>
    </header>
    <!-- /header -->
    <!-- nav -->

    <?$APPLICATION->IncludeComponent("bitrix:menu", "top", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "3",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
			0 => "",
		),
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "A",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
	),
	false
);?>
    <!-- /nav -->
    <? if ($APPLICATION->GetCurPage(false) !== '/ex1/'): ?>
    <!-- breadcrumbs -->
    <div class="breadcrumbs-box">
        <div class="inner-wrap">
            <a href="">Главная</a>
            <a href="">Мебель</a>
            <span>Выставки и события</span>
        </div>
    </div>
    <!-- /breadcrumbs -->
    <div class="page">
        <!-- content box -->
        <div class="content-box">
            <!-- content -->
            <div class="content">
                <div class="cnt">
                    <header>
                        <h1><? $APPLICATION->ShowTitle(); ?></h1>
                    </header>
                    <hr>

                    <? endif; ?>
                    <? if ($APPLICATION->GetCurPage(false) === '/ex1/'): ?>
                        <!-- page -->
                        <div class="page">
                            <!-- content box -->
                            <div class="content-box">
                                <!-- content -->
                                <div class="content">
                                    <div class="cnt">

                                        <p>«Мебельная компания» осуществляет производство мебели на высококлассном
                                            оборудовании
                                            с применением минимальной доли ручного труда, что позволяет обеспечить
                                            высокое
                                            качество нашей продукции. Налажен производственный процесс как массового и
                                            индивидуального характера, что с одной стороны позволяет обеспечить
                                            постоянную
                                            номенклатуру изделий и индивидуальный подход – с другой.
                                        </p>


                                        <!-- index column -->
                                        <div class="cnt-section index-column">
                                            <div class="col-wrap">

                                                <!-- main actions box -->
                                                <div class="column main-actions-box">
                                                    <div class="title-block">
                                                        <h2>Новинки</h2>
                                                        <hr>
                                                    </div>
                                                    <div class="items-wrap">
                                                        <div class="item-wrap">
                                                            <div class="item">
                                                                <div class="title-block att">
                                                                    Угловой диван!
                                                                </div>
                                                                <br>
                                                                <div class="inner-block">
                                                                    <a href="" class="photo-block">
                                                                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/new01.jpg"
                                                                             alt="">
                                                                    </a>
                                                                    <div class="text"><a href="">Угловой диван
                                                                            "Титаник", с
                                                                            большим выбором расцветок и фактур.</a>
                                                                        <a href="" class="btn-arr"></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-wrap">
                                                            <div class="item">
                                                                <div class="title-block att">
                                                                    Угловой диван!
                                                                </div>
                                                                <br>
                                                                <div class="inner-block">
                                                                    <a href="" class="photo-block">
                                                                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/new02.jpg"
                                                                             alt="">
                                                                    </a>
                                                                    <div class="text"><a href="">Угловой диван
                                                                            "Титаник", с
                                                                            большим выбором расцветок и фактур.</a>
                                                                        <a href="" class="btn-arr"></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-wrap">
                                                            <div class="item">
                                                                <div class="title-block att">
                                                                    Угловой диван!
                                                                </div>
                                                                <br>
                                                                <div class="inner-block">
                                                                    <a href="" class="photo-block">
                                                                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/new03.jpg"
                                                                             alt="">
                                                                    </a>
                                                                    <div class="text"><a href="">Угловой диван
                                                                            "Титаник", с
                                                                            большим выбором расцветок и фактур.</a>
                                                                        <a href="" class="btn-arr"></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="" class="btn-next">Все новинки</a>
                                                </div>
                                                <!-- /main actions box -->
                                                <!-- main news box -->
                                                <div class="column main-news-box">
                                                    <div class="title-block">
                                                        <h2>Новости</h2>
                                                    </div>
                                                    <hr>
                                                    <div class="items-wrap">
                                                        <div class="item-wrap">
                                                            <div class="item">
                                                                <div class="title"><a href="">29 августа 2012</a>
                                                                </div>
                                                                <div class="text"><a href="">Поступление лучших офисных
                                                                        кресел
                                                                        из Германии </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-wrap">
                                                            <div class="item">
                                                                <div class="title"><a href="">29 августа 2012</a>
                                                                </div>
                                                                <div class="text"><a href="">Мастер-класс дизайнеров из
                                                                        Италии
                                                                        для производителей мебели </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-wrap">
                                                            <div class="item">
                                                                <div class="title"><a href="">29 августа 2012</a>
                                                                </div>
                                                                <div class="text"><a href="">Поступление лучших офисных
                                                                        кресел
                                                                        из Германии </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-wrap">
                                                            <div class="item">
                                                                <div class="title"><a href="">29 августа 2012</a>
                                                                </div>
                                                                <div class="text"><a href="">Наша дилерская сеть
                                                                        расширилась
                                                                        теперь ассортимент наших товаров доступен в
                                                                        Казани </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="" class="btn-next">Все новости</a>
                                                </div>
                                                <!-- /main news box -->

                                            </div>
                                        </div>
                                        <!-- /index column -->

                                        <!-- afisha box -->
                                        <div class="cnt-section afisha-box">
                                            <div class="section-title-block">
                                                <h2 class="second-ttile">Ближайшие мероприятия</h2>
                                                <a href="" class="btn-next">все мероприятия</a>
                                            </div>
                                            <hr>
                                            <div class="items-wrap">
                                                <div class="item-wrap">
                                                    <div class="item">
                                                        <div class="title"><a href="">29 августа 2012, Москва</a>
                                                        </div>
                                                        <div class="text"><a href="">Семинар производителей мебели
                                                                России и СНГ,
                                                                Обсуждение тенденций.</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-wrap">
                                                    <div class="item">
                                                        <div class="title"><a href="">29 августа 2012, Москва</a>
                                                        </div>
                                                        <div class="text"><a href="">Открытие шоу-рума на Невском
                                                                проспекте.
                                                                Последние модели в большом ассортименте.</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-wrap">
                                                    <div class="item">
                                                        <div class="title"><a href="">29 августа 2012, Москва</a>
                                                        </div>
                                                        <div class="text"><a href="">Открытие нового магазина в нашей
                                                                дилерской
                                                                сети.</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /afisha box -->
                                    </div>
                                </div>
                                <!-- /content -->
                                <!-- side -->
                                <div class="side">
                                    <!-- side anonse -->
                                    <div class="side-block side-anonse">
                                        <div class="title-block"><span class="i i-title01"></span>Полезная информация!
                                        </div>
                                        <div class="item">
                                            <p>Клиенты предпочитают все больше эко-материалов.</p>
                                        </div>
                                    </div>
                                    <!-- /side anonse -->
                                    <!-- side wrap -->
                                    <div class="side-wrap">
                                        <div class="item-wrap">
                                            <!-- side action -->
                                            <div class="side-block side-action">
                                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/side-action-bg.jpg" alt=""
                                                     class="bg">
                                                <div class="photo-block">
                                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/side-action.jpg" alt="">
                                                </div>
                                                <div class="text-block">
                                                    <div class="title">Акция!</div>
                                                    <p>Мебельная полка всего за 560 <span class="r">a</span>
                                                    </p>
                                                </div>
                                                <a href="" class="btn-more">подробнее</a>
                                            </div>
                                            <!-- /side action -->
                                        </div>

                                        <!-- footer rew slider box -->
                                        <div class="item-wrap">
                                            <div class="rew-footer-carousel">
                                                <div class="item">
                                                    <div class="side-block side-opin">
                                                        <div class="inner-block">
                                                            <div class="title">
                                                                <div class="photo-block">
                                                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/side-opin.jpg"
                                                                         alt="">
                                                                </div>
                                                                <div class="name-block"><a href="">Дмитрий Иванов</a>
                                                                </div>
                                                                <div class="pos-block">Генеральный директор,"Офис+"
                                                                </div>
                                                            </div>
                                                            <div class="text-block">“В магзине предоставили потрясающий
                                                                выбор
                                                                расцветок, а также, получил большую скидку по карте
                                                                постоянного...
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="side-block side-opin">
                                                        <div class="inner-block">
                                                            <div class="title">
                                                                <div class="photo-block">
                                                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/side-opin.jpg"
                                                                         alt="">
                                                                </div>
                                                                <div class="name-block"><a href="">Дмитрий Иванов</a>
                                                                </div>
                                                                <div class="pos-block">Генеральный директор,"Офис+"
                                                                </div>
                                                            </div>
                                                            <div class="text-block">“В магазине предоставили потрясающий
                                                                выбор
                                                                расцветок, а также, получил большую скидку по карте
                                                                постоянного...
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- / footer rew slider box -->
                                    </div>
                                    <!-- /side wrap -->
                                </div>
                                <!-- /side -->
                    <? endif; ?>

