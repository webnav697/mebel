<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE HTML>
<html lang="en-US">
<head> 
	<?IncludeTemplateLangFile(__FILE__); //Подключение языковых файлов как раньше?>
	<meta http-equiv="Content-Type" content="text/html; charset=<?=LANG_CHARSET;?>" />
	<title><?$APPLICATION->ShowTitle()?></title>
	<?$APPLICATION->ShowCSS();?><!--Выводит все стили, но мешает Бутстрап -->
<?use Bitrix\Main\Page\Asset;?>
	<?$APPLICATION->ShowHeadStrings()?>
	<?$APPLICATION->ShowHeadScripts()?> 
	
	<?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery-1.8.2.min.js");?>
	<?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/slides.min.jquery.js");?>
	<?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery.carouFredSel-6.1.0-packed.js");?>
	<?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/functions.js");?>
<link rel="icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" type="image/x-icon" />
<!--<link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH?>/css/template.css">
<link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH?>/css/style.css">-->
	
	<!--[if gte IE 9]><style type="text/css">.gradient {filter: none;}</style><![endif]-->
</head>

<?$APPLICATION->ShowPanel();?>
<body>
		<div class="wrap">
		<div class="hd_header_area">
			<div class="hd_header">
				<table>
					<tr>
						<td rowspan="2" class="hd_companyname">
							<h1><a href="/">
							<?
							$APPLICATION->IncludeFile(
							SITE_DIR."include/logo.php",
							Array(),
							Array("MODE"=>"php")
						);
						?>
							</a></h1>
						</td>
						<td rowspan="2" class="hd_txarea">
							<span class="tel">
							<?$APPLICATION->IncludeFile(
									SITE_DIR."include/phone.php",
									Array(),
									Array("MODE"=>"php")
								);
								?>
							</span>	<br/>	
							<span class="workhours"><?=GetMessage('WORK_TIME');?> 
							<?$APPLICATION->IncludeFile(
									SITE_DIR."include/work_time.php",
									Array(),
									Array("MODE"=>"php")
								);
								?>
							</span>						
						</td>
						<td style="width:232px">
						<!--Форма поиска-->
						<?$APPLICATION->IncludeComponent(
								"bitrix:search.form",
								"top_search",
								Array(
									"PAGE" => "#SITE_DIR#search/index.php",
									"USE_SUGGEST" => "Y"
								)
							);?>
						</td>
					</tr>
					<tr>
						<td style="padding-top: 11px;">
							<!-- Компонент формы авторизации -->
							<?$APPLICATION->IncludeComponent(
										"bitrix:system.auth.form", 
										"auth", 
										array(
											"COMPONENT_TEMPLATE" => "auth",
											"FORGOT_PASSWORD_URL" => "/auth/",
											"PROFILE_URL" => "/auth/personal.php",
											"REGISTER_URL" => "/auth/registration.php",
											"SHOW_ERRORS" => "Y"
										),
										false
									);?>
						</td>
					</tr>
				</table>
			<!--	menu верхнее -->
				<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"top_menu_mebel", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "top_menu_mebel"
	),
	false
);?>
			</div>
		</div>

<?// Если главная страница
if (CSite::InDir('/index.php')){?>
		<!--- // end header area --->
	<!--Выводим слайдер на главной-->
		<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"slider_home",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => ".default",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"NAME",1=>"DETAIL_TEXT",2=>"DETAIL_PICTURE",3=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "6",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MEDIA_PROPERTY" => "",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "10",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"LINK",1=>"",),
		"SEARCH_PAGE" => "/search/",
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SLIDER_PROPERTY" => "",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"TEMPLATE_THEME" => "blue",
		"USE_RATING" => "N",
		"USE_SHARE" => "N"
	)
);?>

		
		<!--- // end slider area --->
		
		<div class="main_container homepage">
			
			<!-- events -->
			<div class="ev_events">
	<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"events_home", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "DETAIL_TEXT",
			4 => "DATE_ACTIVE_FROM",
			5 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "7",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "3",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "SITY",
			2 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "ID",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "events_home"
	),
	false
);?>
			</div>
			<!-- // end events -->
			<div class="cn_hp_content">
<!-- Список разделов каталога слева-->
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list", 
	"list_home", 
	array(
		"ADD_SECTIONS_CHAIN" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "list_home",
		"COUNT_ELEMENTS" => "Y",
		"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
		"FILTER_NAME" => "sectionsFilter",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "products",
		"SECTION_CODE" => "",
		"SECTION_FIELDS" => array(
			0 => "NAME",
			1 => "DESCRIPTION",
			2 => "",
		),
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SHOW_PARENT_NAME" => "Y",
		"TOP_DEPTH" => "1",
		"VIEW_MODE" => "LINE"
	),
	false
);?>
<div class="cn_hp_post">
<div class="cn_hp_post_new"><!-- В <h3 -> TITLE Новинка-->
<h3>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"COMPONENT_TEMPLATE" => ".default",
		"PATH" => "/include/title_new.php"
	),
	false
);?>
</h3>
<?$APPLICATION->IncludeComponent(
	"myComp:element.random", 
	".default", 
	array(
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "180",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => ".default",
		"DETAIL_URL" => "#SITE_DIR#/products/#SECTION_ID#/#ID#/",
		"IBLOCKS_PROP" => "19",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "products",
		"IMG_HEIGHT" => "70",
		"IMG_WIDTH" => "100",
		"PARENT_SECTION" => ""
	),
	false
);?>
	  <div class="clearboth"></div>
    </div>
<div class="cn_hp_post_action"><!-- В <h3 -> TITLE Акции-->
<h3>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"COMPONENT_TEMPLATE" => ".default",
		"PATH" => "/include/title_actiya.php"
	),
	false
);?>
</h3>
<?$APPLICATION->IncludeComponent(
	"myComp:element.random", 
	".default", 
	array(
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "180",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => ".default",
		"DETAIL_URL" => "#SITE_DIR#/products/#SECTION_ID#/#ID#/",
		"IBLOCKS_PROP" => "22",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "products",
		"IMG_HEIGHT" => "70",
		"IMG_WIDTH" => "100",
		"PARENT_SECTION" => ""
	),
	false
);?>
	<div class="clearboth"></div>
  </div>
<div class="cn_hp_post_bestsellersn"><!-- В <h3 -> TITLE Хиты продаж-->
<h3>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"COMPONENT_TEMPLATE" => ".default",
		"PATH" => "/include/title_hit.php"
	),
	false
);?>
</h3>
<?$APPLICATION->IncludeComponent(
	"myComp:element.random", 
	".default", 
	array(
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "180",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => ".default",
		"DETAIL_URL" => "#SITE_DIR#/products/#SECTION_ID#/#ID#/",
		"IBLOCKS_PROP" => "23",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "products",
		"IMG_HEIGHT" => "70",
		"IMG_WIDTH" => "100",
		"PARENT_SECTION" => ""
	),
	false
);?>
		<div class="clearboth"></div>
	</div>
</div>
<!--правый блок новостей-->
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"news_right", 
	array(
		"ACTIVE_DATE_FORMAT" => "j F Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "news_right",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_PICTURE",
			2 => "DATE_ACTIVE_FROM",
			3 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "news",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "4",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "Y",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "news",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "PROP",
			2 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "TIMESTAMP_X",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	),
	false
);?>
		<!-- end правый блок новостей-->
		<div class="clearboth"></div>
	</div>
</div>

<script type="text/javascript" >
	$(document).ready(function(){
	
		$("#foo").carouFredSel({
			items:2,
			prev:'#rwprev',
			next:'#rwnext',
			scroll:{
				items:1,
				duration:2000
			}
		});	
	});	
</script>
	
<div class="rw_reviewed">
	<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"slider_reviews",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"PREVIEW_TEXT",1=>"PREVIEW_PICTURE",2=>"DETAIL_TEXT",3=>"DETAIL_PICTURE",4=>"DATE_ACTIVE_FROM",5=>"DATE_CREATE",6=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"POST",1=>"COMPANY_NAME",2=>"",),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>
</div>
		<?} else {?>
	<!--- // Конец вывода для Главной --->
<!--Если не раздел auth-->
<?if (CSite::InDir('/auth/')):?>
<!-- не выводим крошки если раздел auth -->
<?else:?>
<?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb", 
	"breadgrumb-mebel", 
	array(
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0",
		"COMPONENT_TEMPLATE" => "breadgrumb-mebel"
	),
	false
);?>
<?endif?>
<!--Конец условия по разделу '/auth/'-->

<div class="main_container page">
	<div class="mn_container">
		<div class="mn_content">
			<div class="main_post">

				<div class="main_title no-title">
					<p class="title"><?$APPLICATION->ShowTitle(false);?></p>
				</div>
<?}?>			
						<!-- workarea -->
	
								
						