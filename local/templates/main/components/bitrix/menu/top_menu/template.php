<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
    <?if (!empty($arResult)):?>
        <ul class="nav navbar-nav ">
            <?foreach($arResult as $key => $arItem):?>
                <?if($arItem['DEPTH_LEVEL'] != 1){continue;}?>
                <li <?if($arItem["SELECTED"]):?>class="active"<?endif?>><a href="<?=$arItem["LINK"];?>" class="hyper "><span><?=$arItem["TEXT"];?></span></a></li>
            <?endforeach;?>
        </ul>
    <?endif;?>
</div>