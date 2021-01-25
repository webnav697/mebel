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
$frame = $this->createFrame()->begin('');
//dump($arResult);
?>
<?if(is_array($arResult["PICTURE"])):?>
<div class="sb_action">
	<a href="<?=$arResult["DETAIL_PAGE_URL"]?>">
		<img src="<?=$arResult["PICTURE"]["src"]?>" width="<?=$arResult["PICTURE"]["width"]?>" height="<?=$arResult["PICTURE"]["height "]?>" alt="<?=$arResult["PICTURE"]["ALT"]?>" title="<?=$arResult["PICTURE"]["TITLE"]?>"/>
	</a>
	<h4><?=GetMessage('DISCOUNT');?></h4>
	<h5><a href="<?=$arResult["DETAIL_PAGE_URL"]?>"><?=$arResult['IPROPERTY_VALUES']['ELEMENT_META_TITLE']?></a></h5>
	<a href="<?=$arResult["DETAIL_PAGE_URL"]?>" class="sb_action_more"><?=GetMessage('READ_MORE');?></a>
	<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
		<span class="ps_date"><?=$arItem["DISPLAY_ACTIVE_FROM"]?></span>
	<?endif?>
</div>

<?endif?>

<?
$frame->end();
?>