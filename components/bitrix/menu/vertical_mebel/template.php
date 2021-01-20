<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<div class="sb_nav">
<ul>

<?
$previousLevel = 0;
foreach($arResult as $arItem):?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>

		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
			<li class="close current">
			<span class="sb_showchild"></span>
				<a href="<?=$arItem["LINK"]?>">
						<span><?=$arItem["TEXT"]?></span>
				</a>
				<ul>					
		<?else:?>
			<li class="close">
				<a href="<?=$arItem["LINK"]?>">
					<span><?=$arItem["TEXT"]?></span>
				 </a>
			</li>
		<ul>
		<?endif?>

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li class="close">				
					<a href="<?=$arItem["LINK"]?>">
					<span><?=$arItem["TEXT"]?></span>
				</a>
			</li>
			<?else:?>
				<li class="open close">
				 <a href="<?=$arItem["LINK"]?>">
					<span><?=$arItem["TEXT"]?></span>
				 </a>
			  </li>
			<?endif?>

		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>
</ul>
</div>
<?endif?>