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

<?

/*GLOBAL $arFilterProp1;
GLOBAL $arFilterProp2;
GLOBAL $arFilterProp3;
$newProducts_1 = $selectId = 20;
$newProducts_2 = 25;
$newProducts_3 = 26;
$arFilterProp1 = ["PROPERTY" => $selectId];
$arFilterProp2 = ["PROPERTY" => $selectId];
$arFilterProp2 = ["PROPERTY" => $selectId];
*/

//$GLOBALS ['arFilterProp1']['PROPERTIES']["TEST1"]["ACTIVE"];
//$a = ["PROPERTIES"]["TEST1"];
//dump($arResult);
?>



<?foreach($arResult["ITEMS"] as $arItem):?>
<?if ($arItem['PROPERTIES']['VALUE'] == "Y"):?>
		<h3>Новинка</h3>
<?endif;?>
<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

	<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" target="_blank">
		<img src="<?=$arItem['PREVIEW_PICTURE']['SRC']; ?>"
		 alt="<?=$arItem['PREVIEW_PICTURE']['ALT']; ?>"
		 title="<?=$arItem['PREVIEW_PICTURE']['TITLE']; ?>" />
	</a>
	<?$txt = $arItem['PREVIEW_TEXT'];?>
	<p><?=cut($txt, 130)."...";?></p><?//Урезаем текст c помощью функции из init.php?>

<?endforeach; ?>
