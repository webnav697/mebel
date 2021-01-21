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
							<form action="">
								<div class="hd_search_form" style="float:right;">
									<input placeholder="Поиск" type="text"/>
									<input type="submit" value=""/>
								</div>
							</form>
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
						"MENU_CACHE_TYPE" => "N",
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
				<div class="ev_h">
					<h3>Ближайшие события</h3>
					<a href="" class="ev_allevents">Все мероприятия &rarr;</a>
				</div>
				<ul class="ev_lastevent">
					<li>
						<h4><a href="">29 августа 2012, Москва</a></h4>
						<p>Семинар производителей мебели России и СНГ, Обсуждение тенденций.</p>
					</li>
					<li>
						<h4><a href="">30 августа 2012, Санкт-Петербург</a></h4>
						<p>Открытие шоу-рума на Невском проспекте. Последние модели в большом ассортименте.</p>
					</li>
					<li>
						<h4><a href="">31 августа 2012, Краснодар</a></h4>
						<p>Открытие нового магазина в нашей дилерской сети.</p>
					</li>
				</ul>
				<div class="clearboth"></div>
			</div>
			<!-- // end events -->
			<div class="cn_hp_content">
				<div class="cn_hp_category">
					<ul>
						<li>
							<img src="<?=SITE_TEMPLATE_PATH?>/content/1.png" alt=""/>
							<h2><a href="">Мягкая мебель</a></h2>
							<p>Диваны, кресла и прочая мягкая мебель <a class="cn_hp_categorymore" href="">&rarr;</a></p>
							<div class="clearboth"></div>
						</li>
						<li>
							<img src="<?=SITE_TEMPLATE_PATH?>/content/2.png" alt=""/>
							<h2><a href="">Офисная мебель</a></h2>
							<p>Диваны, столы, стулья <a class="cn_hp_categorymore" href="">&rarr;</a></p>
							<div class="clearboth"></div>
						</li>
						<li>
							<img src="<?=SITE_TEMPLATE_PATH?>/content/3.png" alt=""/>
							<h2><a href="">Мебель для кухни</a></h2>
							<p>Полки, ящики, столы и стулья <a class="cn_hp_categorymore" href="">&rarr;</a></p>
							<div class="clearboth"></div>
						</li>
						<li>
							<img src="<?=SITE_TEMPLATE_PATH?>/content/4.png" alt=""/>
							<h2><a href="">Детская мебель</a></h2>
							<p>Кровати, стулья, мягкая детская мебель <a class="cn_hp_categorymore" href="">&rarr;</a></p>
							<div class="clearboth"></div>
						</li>
					</ul>
					<a href="" class="cn_hp_category_more">Все разделы каталога &rarr;</a>
				</div>
				<div class="cn_hp_post">
					<div class="cn_hp_post_new">
						<h3>Новинки</h3>
						<img src="<?=SITE_TEMPLATE_PATH?>/content/7.png" alt=""/>
						<p>Угловой диван "Титаник", с большим выбором расцветок и фактур.</p>
						<div class="clearboth"></div>
					</div>
					<div class="cn_hp_post_action">
						<h3>Акции</h3>
						<img src="<?=SITE_TEMPLATE_PATH?>/content/7.png" alt=""/>
						<p>Угловой диван "Титаник", с большим выбором расцветок и фактур.</p>
						<div class="clearboth"></div>
					</div>
					<div class="cn_hp_post_bestsellersn">
						<h3>Хиты продаж</h3>
						<img src="<?=SITE_TEMPLATE_PATH?>/content/7.png" alt=""/>
						<p>Угловой диван "Титаник", с большим выбором расцветок и фактур.</p>
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
			0 => "",
			1 => "",
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
			1 => "",
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
				<!-- end правй блок новостей-->
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
			<div class="rw_slider">
				<h4>Отзывы</h4>
				<ul id="foo">
					<li>
						<div class="rw_message">
							<img src="<?=SITE_TEMPLATE_PATH?>/content/8.png" class="rw_avatar" alt=""/>
							<span class="rw_name">Сергей Антонов</span>
							<span class="rw_job">Руководитель финансового отдела “Банк+”</span>
							<p>“Покупал офисные стулья и столы, остался очень доволен! Низкие цены, быстрая доставка, обслуживание на высоте! Спасибо!”</p>
							<div class="clearboth"></div>
							<div class="rw_arrow"></div>
						</div>
					</li>
					<li>
						<div class="rw_message">
							<img src="<?=SITE_TEMPLATE_PATH?>/content/8.png" class="rw_avatar" alt=""/>
							<span class="rw_name">Дмитрий Иванов</span>
							<span class="rw_job">Генеральный директор группы компаний "Офис+"</span>
							<p>“В магзине предоставили потрясающий выбор расцветок, а также, получил большую скидку по карте постоянного клиента.”</p>
							<div class="clearboth"></div>
							<div class="rw_arrow"></div>
						</div>
					</li>
					<li>
						<div class="rw_message">
							<img src="<?=SITE_TEMPLATE_PATH?>/content/8.png" class="rw_avatar" alt=""/>
							<span class="rw_name">Сергей Антонов</span>
							<span class="rw_job">Руководитель финансового отдела “Банк+”</span>
							<p>“Покупал офисные стулья и столы, остался очень доволен! Низкие цены, быстрая доставка, обслуживание на высоте! Спасибо!”</p>
							<div class="clearboth"></div>
							<div class="rw_arrow"></div>
						</div>
					</li>
				</ul>
				<div id="rwprev"></div>
				<div id="rwnext"></div>
				<a href="" class="rw_allreviewed">Все отзывы</a>
			</div>
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
	
								
						