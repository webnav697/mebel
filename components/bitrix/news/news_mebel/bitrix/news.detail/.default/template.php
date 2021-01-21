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

	<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
	<div class="main_title">
		<p class="title"><?=$arResult["NAME"]?></p><br>
		<span class="main_date"><?=$arResult["DISPLAY_ACTIVE_FROM"];?></span>
	</div>
	<?endif;?>

	<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
		<img 	src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
			alt="<?=$arResult["NAME"]?>" 	title="<?=$arResult["NAME"]?>"
			align="left"
			/>
	<?endif?>
	<p><?echo $arResult["DETAIL_TEXT"];?></p>


