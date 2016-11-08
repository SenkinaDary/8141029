<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
?>
<?use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Page\Asset;
Loc::loadMessages(__FILE__);?>
<?php
/**
 * Created by PhpStorm.
 * User: Дарья
 * Date: 25.10.2016
 * Time: 20:12
 */
?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
<head>
    <?$APPLICATION->ShowHead();?>
    <title><?$APPLICATION->ShowTitle();?></title>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- css -->
    <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/bootstrap.css");?>
    <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/style.css");?>
    <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/font-awesome.min.css");?>
    <!--// css -->
    <!-- font -->
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!-- //font -->
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery-1.11.1.min.js", true);?>
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/bootstrap.js", true);?>
</head>

<body>
<?$APPLICATION->ShowPanel();?>
<div class="header-top-w3layouts">
    <div class="container">
        <div class="col-md-6 logo-w3">
                <?if(!CSite::InDir('/')):?><a href="/"><?endif;?>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "COMPONENT_TEMPLATE" => ".default",
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => SITE_TEMPLATE_PATH."/include_areas/logo.php"
                        )
                    );?>
                    <?if(!CSite::InDir('/')):?></a><?endif;?>

        </div>
        <div class="col-md-6 phone-w3l">
            <ul>
                <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></li>
                <li>8 (495) 718-32-43</li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="header-bottom-w3ls">
    <div class="container">
        <div class="col-md-7 navigation-agileits">
            <nav class="navbar navbar-default">
                <div class="navbar-header nav_2">
                    <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <?$APPLICATION->IncludeComponent("bitrix:menu", "top_menu", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "2",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
			0 => "",
		),
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "A",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "left",	// Тип меню для первого уровня
		"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
	),
	false
);?>

            </nav>
        </div>
        <script>
            $(document).ready(function(){
                $(".dropdown").hover(
                    function() {
                        $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
                        $(this).toggleClass('open');
                    },
                    function() {
                        $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
                        $(this).toggleClass('open');
                    }
                );
            });
        </script>
        <div class="col-md-4 search-agileinfo">
            <form action="#" method="post">
                <input type="search" name="Search" placeholder="Найти..." required="">
                <button type="submit" class="btn btn-default search" aria-label="Left Align">
                    <i class="fa fa-search" aria-hidden="true"> </i>
                </button>
            </form>
        </div>
        <div class="col-md-1 cart-wthree">
            <div class="cart">
                <form action="#" method="post" class="last">
                    <input type="hidden" name="cmd" value="_cart" />
                    <input type="hidden" name="display" value="1" />
                    <button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                </form>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
