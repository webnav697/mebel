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

	<div class="ev_h">
		<h3><?=GetMessage('NEW_EVENTS');?></h3>	
		<a href="/events/" class="ev_allevents"><?=GetMessage('LINK_TITLE_EVENTS');?></a>
	</div>
	<ul class="ev_lastevent">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	
		<li id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
			<h4>
			  <a href="<?=$arItemDETAIL_PAGE_URL?>">
				<?=$arItem["DISPLAY_ACTIVE_FROM"].", " . $arItem["PROPERTIES"]['SITY']['VALUE'];?> 
			  </a>
		    </h4>
		<?endif?>
		<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
			<?$txt = $arItem['PREVIEW_TEXT'];?>
			<p><?=cut($txt, 65)."...";?></p>
		<?endif;?>
		</li>

<?endforeach;?>

</ul>
<div class="clearboth"></div>

