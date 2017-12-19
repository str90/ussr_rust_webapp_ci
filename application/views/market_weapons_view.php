<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="USSR_Rust server store">
    <link rel="stylesheet" type="text/css" href = "<?php echo base_url(); ?>css/normalize.css">
    <link rel="stylesheet" type="text/css" href = "<?php echo base_url(); ?>css/donate-shopwindows.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type = 'text/javascript' src = "<?php echo base_url();?>js/donate_addToCart.js"></script>
    <title>Магазин оружия</title>
</head>
<body>
<div class="wrapper">
    <div class="top"></div>
    <ul class="navigation">
        <li><?php echo anchor('MainPage/index', 'Главная', 'class="link-class"') ?></li>
        <li><?php echo anchor('MarketWeapons/display', 'Оружие', 'class="link-class"') ?></li>
        <li><a href="donate_ammo.html">Патроны</a></li>
        <li><a href="donate_resources.html">Ресурсы</a></li>
        <li><a href="donate_items.html">Предметы</a></li>
        <li><a href="donate_clothes.html">Одежда</a></li>
        <li class="basket"><a href="donate_basket.html">Корзина</a></li>
        <div class="clear"></div>
    </ul>

    <div class="footer">
        <h1 class="pageTitle">Витрина с оружием</h1>

        <figure class="trade_item">
            <img src="/resources/images/donat_store/weapons/Assault_Rifle.png" height="80" width="80">
            <figcaption>Диды ваивали</figcaption>
            <hr>
            <form id="wpn_ak47_form" method="post"/>
            <label class="item_amount_field_descr" for="item_amount">Количество</label>
            <input class="item_amount_field" placeholder='0' type="text" pattern='[0-9]{,}' name='wpn_ak47_quantity' id='item_amount'><br>
            <button class="to_basket_btn" type='submit'>В корзину</button>
            </form>
        </figure>

        <figure class="trade_item">
            <img src="/resources/images/donat_store/weapons/Bolt_Action_Rifle.png" height="80" width="80">
            <figcaption>Болтовка</figcaption>
            <hr>
            <form id="wpn_bolt_form" method="post"/>
            <label class="item_amount_field_descr" for="item_amount">Количество</label>
            <input class="item_amount_field" placeholder='0' type="text" pattern='[0-9]{,}' name='wpn_bolt_quantity' id='item_amount'><br>
            <button class="to_basket_btn" type='submit'>В корзину</button>
            </form>
        </figure>

        <figure class="trade_item">
            <img src="/resources/images/donat_store/weapons/Crossbow.png" height="80" width="80">
            <figcaption>Арбалет</figcaption>
            <hr>
            <form id="wpn_crossbow" method="post"/>
            <label class="item_amount_field_descr" for="item_amount">Количество</label>
            <input class="item_amount_field" placeholder='0' type="text" pattern='[0-9]{,}' name='wpn_crossbow_quantity' id='item_amount'><br>
            <button class="to_basket_btn" type='submit'>В корзину</button>
            </form>
        </figure>

        <figure class="trade_item">
            <img src="/resources/images/donat_store/weapons/Custom_SMG.png" height="80" width="80">
            <figcaption>Кустарный ПП</figcaption>
            <hr>
            <form id="wpn_csmg" method="post"/>
            <label class="item_amount_field_descr" for="item_amount">Количество</label>
            <input class="item_amount_field" placeholder='0' type="text" pattern='[0-9]{,}' name='wpn_csmg_quantity' id='item_amount'><br>
            <button class="to_basket_btn" type='submit'>В корзину</button>
            </form>
        </figure>

        <figure class="trade_item">
            <img src="/resources/images/donat_store/weapons/Double_Barrel_Shotgun.png" height="80" width="80">
            <figcaption>Гладкоствольный<wbr> двуствольный дрынь</figcaption>
                    <hr>
                    <form id="wpn_db" method="post"/>
                    <label class="item_amount_field_descr" for="item_amount">Количество</label>
                    <input class="item_amount_field" placeholder='0' type="text" pattern='[0-9]{,}' name='wpn_db_quantity' id='item_amount'><br>
                    <button class="to_basket_btn" type='submit'>В корзину</button>
                    </figcaption>
        </figure>

        <figure class="trade_item">
            <img src="/resources/images/donat_store/weapons/Eoka_Pistol.png" height="80" width="80">
            <figcaption>Пугач бичей</figcaption>
            <hr>
            <form id="wpn_eoka" method="post"/>
            <label class="item_amount_field_descr" for="item_amount">Количество</label>
            <input class="item_amount_field" placeholder='0' type="text" pattern='[0-9]{,}' name='wpn_eoka_quantity' id='item_amount'><br>
            <button class="to_basket_btn" type='submit'>В корзину</button>
            </form>
        </figure>

        <figure class="trade_item">
            <img src="/resources/images/donat_store/weapons/Hunting_Bow.png" height="80" width="80">
            <figcaption>Лук</figcaption>
            <hr>
            <form id="wpn_legolas" method="post"/>
            <label class="item_amount_field_descr" for="item_amount">Количество</label>
            <input class="item_amount_field" placeholder='0' type="text" pattern='[0-9]{,}' name='wpn_legolas_quantity' id='item_amount'><br>
            <button class="to_basket_btn" type='submit'>В корзину</button>
            </form>
        </figure>

        <figure class="trade_item">
            <img src="/resources/images/donat_store/weapons/LR-300_Assault_Rifle.png" height="80" width="80">
            <figcaption>Пендосский калаш</figcaption>
            <hr>
            <form id="wpn_lr-300" method="post"/>
            <label class="item_amount_field_descr" for="item_amount">Количество</label>
            <input class="item_amount_field" placeholder='0' type="text" pattern='[0-9]{,}' name='wpn_lr-300_quantity' id='item_amount'><br>
            <button class="to_basket_btn" type='submit'>В корзину</button>
            </form>
        </figure>

        <figure class="trade_item">
            <img src="/resources/images/donat_store/weapons/Pump_Shotgun.png" height="80" width="80">
            <figcaption>Гладкоствольный<wbr> дрынь на максималках</figcaption>
            <hr>
            <form id="wpn_pump_shotgun" method="post"/>
            <label class="item_amount_field_descr" for="item_amount">Количество</label>
            <input class="item_amount_field" placeholder='0' type="text" pattern='[0-9]{,}' name='wpn_pump_shotgun_quantity' id='item_amount'><br>
            <button class="to_basket_btn" type='submit'>В корзину</button>
            </form>
        </figure>

        <figure class="trade_item">
            <img src="/resources/images/donat_store/weapons/Revolver.png" height="80" width="80">
            <figcaption>Мечта чекиста</figcaption>
            <hr>
            <form id="wpn_checkist" method="post"/>
            <label class="item_amount_field_descr" for="item_amount">Количество</label>
            <input class="item_amount_field" placeholder='0' type="text" pattern='[0-9]{,}' name='wpn_checkist_quantity' id='item_amount'><br>
            <button class="to_basket_btn" type='submit'>В корзину</button>
            </form>
        </figure>

        <figure class="trade_item">
            <img src="/resources/images/donat_store/weapons/Semi-Automatic_Pistol.png" height="80" width="80">
            <figcaption>Обычный<wbr> пистолет</figcaption>
            <hr>
            <form id="wpn_pistol" method="post"/>
            <label class="item_amount_field_descr" for="item_amount">Количество</label>
            <input class="item_amount_field" placeholder='0' type="text" pattern='[0-9]{,}' name='wpn_pistol_quantity' id='item_amount'><br>
            <button class="to_basket_btn" type='submit'>В корзину</button>
            </form>
        </figure>

        <figure class="trade_item">
            <img src="/resources/images/donat_store/weapons/Semi-Automatic_Rifle.png" height="80" width="80">
            <figcaption>Нарезной полу<wbr>автоматический дрынь</figcaption>
            <hr>
            <form id="wpn_dmr" method="post"/>
            <label class="item_amount_field_descr" for="item_amount">Количество</label>
            <input class="item_amount_field" placeholder='0' type="text" pattern='[0-9]{,}' name='wpn_dmr_quantity' id='item_amount'><br>
            <button class="to_basket_btn" type='submit'>В корзину</button>
            </form>
        </figure>

        <figure class="trade_item">
            <img src="/resources/images/donat_store/weapons/Thompson.png" height="80" width="80">
            <figcaption>Автоматический<wbr> мелкокали<wbr>берный дрынь</figcaption>
            <hr>
            <form id="wpn_thompson" method="post"/>
            <label class="item_amount_field_descr" for="item_amount">Количество</label>
            <input class="item_amount_field" placeholder='0' type="text" pattern='[0-9]{,}' name='wpn_thompson_quantity' id='item_amount'><br>
            <button class="to_basket_btn" type='submit'>В корзину</button>
            </form>
        </figure>

        <figure class="trade_item">
            <img src="/resources/images/donat_store/weapons/Waterpipe_Shotgun.png" height="80" width="80">
            <figcaption>Гладкоствольный<wbr> дрынь на минималках</figcaption>
            <hr>
            <form id="wpn_waterpipe" method="post"/>
            <label class="item_amount_field_descr" for="item_amount">Количество</label>
            <input class="item_amount_field" placeholder='0' type="text" pattern='[0-9]{,}' name='wpn_waterpipe_quantity' id='item_amount'><br>
            <button class="to_basket_btn" type='submit'>В корзину</button>
            </form>
        </figure>

        <figure class="trade_item">
            <img src="/resources/images/donat_store/weapons/Holosight.png" height="80" width="80">
            <figcaption>Голографический<wbr>прицел</figcaption>
            <hr>
            <form id="wpn_holo" method="post"/>
            <label class="item_amount_field_descr" for="item_amount">Количество</label>
            <input class="item_amount_field" placeholder='0' type="text" pattern='[0-9]{,}' name='wpn_holo_quantity' id='item_amount'><br>
            <button class="to_basket_btn" type='submit'>В корзину</button>
            </form>
        </figure>

        <figure class="trade_item">
            <img src="/resources/images/donat_store/weapons/4x_Zoom_Scope.png" height="80" width="80">
            <figcaption>4х кратный прицел</figcaption>
            <hr>
            <form id="wpn_4x" method="post"/>
            <label class="item_amount_field_descr" for="item_amount">Количество</label>
            <input class="item_amount_field" placeholder='0' type="text" pattern='[0-9]{,}' name='wpn_4x_quantity' id='item_amount'><br>
            <button class="to_basket_btn" type='submit'>В корзину</button>
            </form>
        </figure>

        <figure class="trade_item">
            <img src="/resources/images/donat_store/weapons/Muzzle_Boost.png" height="80" width="80">
            <figcaption>Дульный ускоритель</figcaption>
            <hr>
            <form id="wpn_boost" method="post"/>
            <label class="item_amount_field_descr" for="item_amount">Количество</label>
            <input class="item_amount_field" placeholder='0' type="text" pattern='[0-9]{,}' name='wpn_boost_quantity' id='item_amount'><br>
            <button class="to_basket_btn" type='submit'>В корзину</button>
            </form>
        </figure>

        <figure class="trade_item">
            <img src="/resources/images/donat_store/weapons/Muzzle_Brake.png" height="80" width="80">
            <figcaption>Дульный тормоз</figcaption>
            <hr>
            <form id="wpn_brake" method="post"/>
            <label class="item_amount_field_descr" for="item_amount">Количество</label>
            <input class="item_amount_field" placeholder='0' type="text" pattern='[0-9]{,}' name='wpn_brake_quantity' id='item_amount'><br>
            <button class="to_basket_btn" type='submit'>В корзину</button>
            </form>
        </figure>
    </div>
</div>
</body>
</html>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
