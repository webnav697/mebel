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

<?foreach($arResult["ITEMS"] as $arItem):?>
		
		<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
			<div class="ps_head">
				<a class="ps_head_link" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
				<h2 class="ps_head_h"><?=$arItem["NAME"]?></h2>
				<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
				<span class="ps_date"><?=$arItem["DISPLAY_ACTIVE_FROM"]?></span>
			<?endif?>
			</a>
			</div>
			<?else:?>
			<div class="ps_head">
				<h2 class="ps_head_h"><?=$arItem["NAME"]?></h2>
				<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
				<span class="ps_date"><?=$arItem["DISPLAY_ACTIVE_FROM"]?></span>
			<?endif?>
			</div>
			<?endif;?>
		<?endif;?>
			
			

			<div class="ps_content">

						<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" align="left" alt=""/>
			  

				<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
					<p><?=$arItem["PREVIEW_TEXT"];?></p>
				<?endif;?>

		</div>
<?endforeach;?>
