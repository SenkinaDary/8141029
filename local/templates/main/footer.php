<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();?>
<?php
/**
 * Created by PhpStorm.
 * User: Дарья
 * Date: 25.10.2016
 * Time: 20:13
 */
?>
<!-- newsletter -->
<div class="newsletter">
    <div class="container">
        <div class="col-md-6 w3agile_newsletter_left">
            <h3>Новостная рассылка</h3>
            <p>Подпишитесь на новостную рассылку CLOTHES и будьте в курсе всех интересных предложений.</p>
        </div>
        <div class="col-md-6 w3agile_newsletter_right">
            <form action="#" method="post">
                <input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                <input type="submit" value="Подписка" />
            </form>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //newsletter -->
<div class="footer">
    <div class="container">



                <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"social_networks", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "ID",
			1 => "SORT",
			2 => "PREVIEW_PICTURE",
			3 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "7",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Социальные сети",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "URL",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"COMPONENT_TEMPLATE" => "social_networks"
	),
	false
);?>


        <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"bottom_menu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "bottom",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "bottom",
		"USE_EXT" => "Y",
		"COMPONENT_TEMPLATE" => "bottom_menu"
	),
	false
);?>

        <div class="col-md-3 footer-grids fgd3">
            <h4>Магазин</h4>
            <ul>
                <li><a href="jewellery.html">Аксессуары</a></li>
                <li><a href="men.html">Мужчинам</a></li>
                <li><a href="women.html">Женщинам</a></li>
            </ul>
        </div>
        <div class="col-md-3 footer-grids fgd4">
            <h4>Мой аккаунт</h4>
            <ul>

                <li><a href="login.html">Войти</a></li>
                <li><a href="register.html">Зарегистрироваться</a></li>
                <li><a href="recommended.html">Рекомендованное</a></li>
                <li><a href="payment.html">Платежи</a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
        <p class="copy-right">© <? echo date("Y");?> CLOTHES | Все права защищены.</a></p>
    </div>
</div>
<!-- cart-js -->
<script src="js/minicart.js"></script>
<script>
    w3ls1.render();

    w3ls1.cart.on('w3sb1_checkout', function (evt) {
        var items, len, i;

        if (this.subtotal() > 0) {
            items = this.items();

            for (i = 0, len = items.length; i < len; i++) {
                items[i].set('shipping', 0);
                items[i].set('shipping2', 0);
            }
        }
    });
</script>
<!-- //cart-js -->
</body>
</html>
