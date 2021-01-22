<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => "Случайный элемент",//Имя компонента GetMessage
	"DESCRIPTION" => "Вывод рандомного элемента",// Описание компонента GetMessage
	"ICON" => "/images/photo_view.gif",
	"CACHE_PATH" => "Y",
	"SORT" => , // 40
	"PATH" => array(
		"ID" => "Компонент рандом", // GetMessage 
		"CHILD" => array(
			"ID" => "element",//photo
			"NAME" => "", //GetMessage(" "),
			"SORT" => 20,//20
		)
	),
);

?>