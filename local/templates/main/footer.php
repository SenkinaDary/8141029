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
        <div class="col-md-3 footer-grids fgd1">
            <a href="index.html"><img src="<?=SITE_TEMPLATE_PATH;?>/images/logo2.png" alt=" " /><h3>CLOTHES</h3></a>
            <ul>
                <li>Россия, Москва</li>
                <li>ул. Войковская, д.16/1</li>
                <li>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "COMPONENT_TEMPLATE" => ".default",
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => SITE_TEMPLATE_PATH."/include_areas/email.php"
                        )
                    );?>
                </li>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            </ul>
        </div>
        <div class="col-md-3 footer-grids fgd2">
            <h4>Информация</h4>
            <ul>
                <li><a href="contact.html">Контакты</a></li>
                <li><a href="icons.html">Web Icons</a></li>
                <li><a href="typography.html">Typography</a></li>
                <li><a href="faq.html">FAQ's</a></li>
            </ul>
        </div>
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
