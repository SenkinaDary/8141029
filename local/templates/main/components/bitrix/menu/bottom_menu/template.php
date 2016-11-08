<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="col-md-3 footer-grids fgd2">
	<h4>Информация</h4>
	<?if (!empty($arResult)):?>
	<ul>
		<?foreach($arResult as $key => $arItem):?>
			<?if($arItem['DEPTH_LEVEL'] != 1){continue;}?>
		<li><a href="<?=$arItem["LINK"];?>"><?=$arItem["TEXT"];?></a></li>
		<?endforeach;?>
	</ul>
	<?endif;?>
</div>
