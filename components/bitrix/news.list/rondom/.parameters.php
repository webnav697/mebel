<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arTemplateParameters = array(
	"DISPLAY_DATE" => Array(
		"NAME" => GetMessage("T_IBLOCK_DESC_NEWS_DATE"),
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "Y",
	),
	"DISPLAY_NAME" => Array(
		"NAME" => GetMessage("T_IBLOCK_DESC_NEWS_NAME"),
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "Y",
	),
	"DISPLAY_PICTURE" => Array(
		"NAME" => GetMessage("T_IBLOCK_DESC_NEWS_PICTURE"),
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "Y",
	),
	"DISPLAY_PREVIEW_TEXT" => Array(
		"NAME" => GetMessage("T_IBLOCK_DESC_NEWS_TEXT"),
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "Y",
	),
	
	'ELEMENT_COUNT' => array(
		'PARENT' => 'BASE',
		'NAME' => 'Количество случайных элементов',
		'TYPE' => 'STRING',
		'DEFAULT' => '4',
	),

	// шаблон ссылки на страницу элемента
	'ELEMENT_URL' => array(
		'PARENT' => 'URL_TEMPLATES',
		'NAME' => 'URL, ведущий на страницу с содержимым элемента',
		'TYPE' => 'STRING',
		'DEFAULT' => '#SITE_DIR#/#IBLOCK_CODE#/item/id/#ELEMENT_ID#/'
	),
);
?>
