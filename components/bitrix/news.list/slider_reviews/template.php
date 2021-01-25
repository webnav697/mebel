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

<div class="rw_slider">
	<h4><?=GetMessage("NAME_TITLE");?></h4>
	<ul id="foo">
	<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<li id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<div class="rw_message">
			<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="rw_avatar" alt=""/>
			<span class="rw_name"><?=$arItem["NAME"]?></span>
			<span class="rw_job">
				<?=$arItem["PROPERTIES"]["POST"]["VALUE"] . " " . $arItem["PROPERTIES"]["COMPANY_NAME"]["VALUE"]?>
			</span>
				<p><?=$arItem["PREVIEW_TEXT"];?></p>
				<div class="clearboth"></div>
				<div class="rw_arrow"></div>
			</div>
		</li>	
<?endforeach;?>
</ul>
	<div id="rwprev"></div>
	<div id="rwnext"></div>
	<a href="/reviews/" class="rw_allreviewed"><?=GetMessage("ALL_ELEMENT");?></a>
</div>
