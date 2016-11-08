<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="col-md-3 footer-grids fgd1">
	<a href="index.html"><img src="<?=SITE_TEMPLATE_PATH;?>/images/logo2.png" alt=" " /><h3>CLOTHES</h3></a>
	<?if (!empty($arResult)):?>
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

		<?foreach($arResult["ITEMS"] as $arItem):?>
		<a href="<?=$arItem["PREVIEW_PICTURE"]["SRC"];?>"> <span class="soc_icon"><img src="<?=$arItem["FIELDS"]["PREVIEW_PICTURE"]["SRC"]?>"></span></a>
		<?endforeach;?>
	</ul>
	<?endif;?>
</div>
