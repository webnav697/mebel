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

<div class="cn_hp_lastnews">
<h3><a href="/<?=$arResult["IBLOCK_TYPE_ID"]?>/"><?=GetMessage("NEWS")?></a></h3>
<ul>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<li>
		<h4>
			<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
				<?=substr($arItem["ACTIVE_FROM"], 0, -9)?>
			</a>
		</h4>
		<p><?=$arItem["NAME"]?></p>
	</li>	
<?endforeach;?>			
</ul>
<br/>
<a href="<?=$arItem["LIST_PAGE_URL"]?>" class="cn_hp_lastnews_more">
		<?=GetMessage("ALL_NEWS")?> &rarr;
</a>
</div>


