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
<div class="sb_reviewed">
<?if(is_array($arResult["PICTURE"])):?>
		
		<img class="sb_rw_avatar" border="0"	src="<?=$arResult["PICTURE"]["src"]?>"	width="<?=$arResult["PICTURE"]["width"]?>" height="<?=$arResult["PICTURE"]["height "]?>" alt="<?=$arResult["PICTURE"]["ALT"]?>" title="<?=$arResult["PICTURE"]["TITLE"]?>"/>
<?endif?>
		<span class="sb_rw_name"><?=$arResult["NAME"]?></span>
		<span class="sb_rw_job">
		  <?=$arResult["IPROPERTY_VALUES"]["ELEMENT_META_TITLE"];?>
		</span>
		<p><?=$arResult["PREVIEW_TEXT"];?></p>
		<div class="clearboth"></div>
		<div class="sb_rw_arrow"></div>	
</div>
<?
$frame->end();
?>