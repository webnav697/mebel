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
<?//dump($arResult);?>
		<script type="text/javascript" >
			$().ready(function(){
				$(function(){
					$('#slides').slides({
						preload: true,
						generateNextPrev: false,
						autoHeight: true,
						play: 10000,
						effect: 'fade'
					});
				});
			});
		</script>
		
		<div class="sl_slider" id="slides">
			<div class="slides_container">
				<?foreach($arResult["ITEMS"] as $arItem):?>	
					<?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
								<?$arProperty["DISPLAY_VALUE"];?>
					<?endforeach;?>
					<div>		
						<div>
							<img src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" alt="" />
							<h2><a href="<?=$arItem['PROPERTIES']['LINK']['VALUE'];?>">
								<?=$arItem["NAME"]?>
							</a></h2>
							<p><?=$arItem["DETAIL_TEXT"]?></p>
							<a href="<?=$arItem["PROPERTIES"]["LINK"]["VALUE"]?>" class="sl_more">
								<?=GetMessage('READ_MORE')?> &rarr;
						</a>
						</div>
					</div>
					<?endforeach;?>
				</div>
		</div>



