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

<!-- workarea -->
<?//dump($arResult);?>
<div class="review-block">
	<div class="review-text">
		<div class="review-text-cont">
			<?echo $arResult["PREVIEW_TEXT"];?>
		</div>

		
		<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
			<div style="float: right; font-style: italic;">
				<?=$arResult["NAME"]?>
			</div>
			<?endif;?>	
	</div>
	<div style="clear: both;" class="review-img-wrap">
		<img
			src="<?=$arResult["PREVIEW_PICTURE"]["SRC"]?>"
			width="<?=$arResult["PREVIEW_PICTURE"]["WIDTH"]?>"
			height="<?=$arResult["PREVIEW_PICTURE"]["HEIGHT"]?>"
			alt="<?=$arResult["PREVIEW_PICTURE"]["ALT"]?>"
			title="<?=$arResult["PREVIEW_PICTURE"]["TITLE"]?>"
			/>
	</div>

	
</div>
<a href="/reviews/" class="ps_backnewslist"> <?=GetMessage("BACK_LIST")?></a>
