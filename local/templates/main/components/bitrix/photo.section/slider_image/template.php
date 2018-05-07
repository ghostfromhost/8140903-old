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
<div class="photo-section">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<ul id="roundabout">
	<?foreach($arResult["ROWS"] as $arItems):?>
		<?foreach($arItems as $arItem):?>

			<li id="roundaboutimage1"><a href="javascript:roundaboutimage1();">
				<?if(is_array($arItem["PICTURE"])):?>
				<img src="<?=$arItem["PICTURE"]["SRC"]?>" alt="<?=$arItem["PICTURE"]["ALT"]?>" />
				<?endif?>
			</a></li>
		<?endforeach?>
	<?endforeach?>

</ul>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
