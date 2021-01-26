<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<div class="sb_nav">
<ul>

	<div class="separator">
<?if ($APPLICATION->GetCurDir()=='/company/'):?>
Компания
<?else:?> 
Каталог
<?endif;?>

</div>
<?
//dump($arResult);
$previousLevel = 0;
foreach($arResult as $arItem):?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>

		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<?if ($arItem["SELECTED"] == 1) :?>
					<li class="open selected">
					<?else:?>
					<li class="close current">
				<?endif?>
				<span class="sb_showchild"></span>
				<a href="<?=$arItem["LINK"]?>">
						<span><?=$arItem["TEXT"]?></span>
				</a>
				<ul>
		<?else:?>
				<?if ($arItem["SELECTED"] == 1) :?>
					<li class="close selected">
					<?else:?>
					<li class="close">
				<?endif?>
				<a href="<?=$arItem["LINK"]?>">
					<span><?=$arItem["TEXT"]?></span>
				 </a>
			</li>
				<ul>			
		<?endif?>
		
		

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<?if ($arItem["SELECTED"] == 1) :?>
					<li class="close selected">
					<?else:?>
					<li class="close ">
				<?endif?>				
					<a  href="<?=$arItem["LINK"]?>">
					<span><?=$arItem["TEXT"]?></span>
					</a>
				</li>		
				
			<?else:?>
				<?if ($arItem["SELECTED"] == 1) :?>
					<li class="open close selected">
					<?else:?>
					<li class="open close">
				<?endif?>
				 <a  href="<?=$arItem["LINK"]?>">
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